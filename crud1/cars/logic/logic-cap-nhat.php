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

    if (strlen($_POST['sku']) < 1 || strlen($_POST['name']) > 10) {
        $_SESSION['error']['sku'] = 'sku phải nằm trong khoảng từ 1 -> 10 kí tự';
    } else {
        unset($_SESSION['error']['sku']);
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
    UPDATE cars
    SET
       name = :name,
       brand_id = :brand_id,
       sku = :sku,
       img = :img,
       description = :description
    WHERE 
       id = :id;
    ';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':brand_id', $_POST['brand_id']);
    $stmt->bindParam(':sku', $_POST['sku']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':id', $_POST['id']);

    $img = $_FILES['img'] ?? null;
    $luuanh = $_POST['anh-luutru'];

    if ($img) {
        $pathUpload = __DIR__ . '/../uploads/' . $img['name'];
        if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
            $luuanh = 'uploads/' . $img['name'];
        }
    }

    $stmt->bindParam(':img', $luuanh);

    $stmt->execute();

    if ($_POST['anh-luutru'] != $luuanh) {
        unlink($_POST['anh-luutru']);
    }

    header('location: ../index.php');
} catch (PDOException $e) {
    die($e->getMessage());
}
