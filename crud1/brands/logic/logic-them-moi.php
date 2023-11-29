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

    $sql = '
    INSERT INTO 
    brands (name, img, description) 
    VALUES 
    (:name,:img,:description)';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':description', $_POST['description']);

    $img = $_FILES['img'] ?? null;
    $luuanh = '';

    if ($img) {
        $pathUpload = __DIR__ . '/../uploads/' . $img['name'];
        if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
            $luuanh = 'uploads/' . $img['name'];
        }
    }

    $stmt->bindParam(':img', $luuanh);

    $stmt->execute();

    header('location: ../index.php');
} catch (PDOException $e) {
    die($e->getMessage());
}
