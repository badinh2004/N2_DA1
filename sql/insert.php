<?php
require_once 'pdo.php';

try {
    $name = 'san pham Y';
    $image = '';
    $price = 15000;

    $sql = "
        INSERT INTO products (name,image,price) 
        VALUES (:name, :image, :price)
    ";

    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(':name',$name);
    $stmt -> bindParam(':image',$image);
    $stmt -> bindParam(':price',$price);
    
    $stmt -> execute();
} catch (Exception $e) {
    echo "error : " . $e->getMessage();
    die;
}
