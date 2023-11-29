<?php
require_once '../../connect-db.php';

try {
    $sql = '
    INSERT INTO 
    cars (name, img, description, sku, brand_id) 
    VALUES 
    (:name,:img,:description, :sku,:brand_id)';

    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(':name',$_POST['name']);
    $stmt -> bindParam(':brand_id',$_POST['brand_id']);
    $stmt -> bindParam(':sku',$_POST['sku']);
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
