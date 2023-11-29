<?php
require_once '../../connect-db.php';

try {
    $sql = '
    UPDATE posts
    SET
       title = :title,
       category_id = :category_id,
       img = :img,
       description = :description
    WHERE 
       id = :id;
    ';

    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(':title',$_POST['title']);
    $stmt -> bindParam(':category_id',$_POST['category_id']);
    $stmt -> bindParam(':description',$_POST['description']);
    $stmt -> bindParam(':id',$_POST['id']);

    $img = $_FILES['img'] ?? null ;
    $luuanh = $_POST['anh-luutru'];

    if ($img) {
        $pathUpload = __DIR__ . '/../uploads/'.$img['name'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload)){
            $luuanh = 'uploads/'.$img['name'];
        }
    }

    $stmt -> bindParam(':img',$luuanh);

    $stmt->execute();

    if ($_POST['anh-luutru'] != $luuanh) {
        unlink($_POST['anh-luutru']);
    }

    header('location: ../index.php');
} catch (PDOException $e) {
    die($e->getMessage());
}
