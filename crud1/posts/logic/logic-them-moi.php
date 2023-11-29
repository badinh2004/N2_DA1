<?php
require_once '../../connect-db.php';

try {
    $sql = '
    INSERT INTO 
    posts (title, img, description, category_id) 
    VALUES 
    (:title,:img,:description,:category_id)';

    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(':title',$_POST['title']);
    $stmt -> bindParam(':category_id',$_POST['category_id']);
    $stmt -> bindParam(':description',$_POST['description']);

    $img = $_FILES['img'] ?? null ;
    $luuanh = '';

    if ($img) {
        $pathUpload = __DIR__ . '/../uploads/'.$img['name'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload)){
            $luuanh = 'uploads/'.$img['name'];
        }
    }

    $stmt -> bindParam(':img',$luuanh);


    $stmt->execute();

    header('location: ../index.php');
} catch (PDOException $e) {
    die($e->getMessage());
}
