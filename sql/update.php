<?php
require_once 'pdo.php';

try {
    $name = 'ngo ngot';
    $image = '';
    $price = 15000;
    $id = 11;

    $sql = "
        UPDATE products 
        SET 
           name = :name,
           image = :image,
           price = :price
           WHERE id = :id;
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);


    $stmt->execute();
} catch (Exception $e) {
    echo "error : " . $e->getMessage();
    die;
}
