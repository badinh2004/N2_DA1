<?php
require_once 'pdo.php';

try {
    $id = 11;
    $sql = "
        DELETE products 
        WHERE id = :id;
    ";

    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(':id',$id);

    $stmt->execute();
} catch (Exception $e) {
    echo "error : " . $e->getMessage();
    die;
}
