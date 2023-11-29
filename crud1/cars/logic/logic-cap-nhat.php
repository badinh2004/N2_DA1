<?php
require_once '../../connect-db.php';

try {
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

    $stmt -> bindParam(':name',$_POST['name']);
    $stmt -> bindParam(':brand_id',$_POST['brand_id']);
    $stmt -> bindParam(':sku',$_POST['sku']);
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
