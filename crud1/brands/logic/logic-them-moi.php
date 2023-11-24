<?php
require_once '../../connect-db.php';

try {
    $sql = '
    INSERT INTO 
    brands (name, img, description) 
    VALUES 
    (:name,:img,:description)';

    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(':name',$_POST['name']);
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
