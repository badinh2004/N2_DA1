<?php

require_once '../connect-db.php';

try {
    $sql = "SELECT * FROM brands ";

    $stmt = $conn->prepare($sql);

    // $stmt->bindParam(":id", $_GET['id']);

    $stmt->execute();

    $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);// giá trị fetch_assoc giá trị 2
} catch (Exception $e) { 
    die($e->getMessage());
}