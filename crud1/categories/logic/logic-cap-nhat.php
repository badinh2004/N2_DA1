<?php

require_once '../../connect-db.php';
require_once '../../session.php';
try {
    // validate
    if (strlen($_POST['name']) < 5 || strlen($_POST['name']) > 50) {
        $_SESSION['error']['name'] = 'tên phải nằm trong khoảng từ 5 -> 50 kí tự';
        // array_push($_SESSION['error'],'tên phải nằm trong khoảng từ 5 -> 50 kí tự');
    } else {
        unset($_SESSION['error']['name']);
    }


    if (!in_array($_POST['is_active'], [0, 1])) {
        $_SESSION['error']['is_active'] = 'IS active chỉ nhận 2 giá trị 0 vs 1';
    } else {
        unset($_SESSION['error']['is_active']);
    }

    if (isset($_FILES['img'])) {
        if ($_FILES['img']['size'] > 2048 * 1024) {
            $_SESSION['error']['img'] = 'dung lượng ảnh vượt quá 2MB';
        } else {
            unset($_SESSION['error']['img']);
        }
    }

    if (!empty($_SESSION['error'])) {
        header('location: ../update.php');
        exit();
    }

    $sql = "
        UPDATE categories 
        SET 
            name = :name,
            img = :img,
            is_active = :is_active
        WHERE 
            id = :id;
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':is_active', $_POST['is_active']);
    $stmt->bindParam(':id', $_POST['id']);

    $img = $_FILES['img'] ?? null;
    $pathSaveDB = $_POST['img-current']; // Lưu lại giá trị ảnh hiện tại

    // Xử lý upload ảnh
    if ($img) { // Khi mà có upload ảnh lên thì mới xử lý upload
        $pathUpload = __DIR__ . '/../uploads/' . $img['name'];

        // Upload file lên để lưu trữ
        if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
            $pathSaveDB = 'uploads/' . $img['name'];
        }
    }

    $stmt->bindParam(':img', $pathSaveDB);

    $stmt->execute();

    if ($_POST['img-current'] != $pathSaveDB) {
        unlink($_POST['img-current']);
    }

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}
