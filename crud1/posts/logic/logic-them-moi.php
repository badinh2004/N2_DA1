<?php
require_once '../../connect-db.php';
require_once '../../session.php';

try {
    //validate
    if (strlen($_POST['title']) < 5 || strlen($_POST['title']) > 50) {
        $_SESSION['error']['title'] = 'tên phải nằm trong khoảng từ 5 -> 50 kí tự';
        // array_push($_SESSION['error'],'tên phải nằm trong khoảng từ 5 -> 50 kí tự');
    } else {
        unset($_SESSION['error']['title']);
    }


    if (isset($_FILES['img'])) {
        if ($_FILES['img']['size'] > 2048 * 1024) {
            $_SESSION['error']['img'] = 'dung lượng ảnh vượt quá 2MB';
        } else {
            unset($_SESSION['error']['img']);
        }
    }

    if (!empty($_SESSION['error'])) {
        header('location: ../create.php');
        exit();
    }
    
    

    $sql = '
    INSERT INTO 
    posts (title, img, description, category_id) 
    VALUES 
    (:title,:img,:description,:category_id)';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':title', $_POST['title']);
    $stmt->bindParam(':category_id', $_POST['category_id']);
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
