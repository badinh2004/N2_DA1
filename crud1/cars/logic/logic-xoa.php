<?php
require_once '../connect-db.php';
try {
    $sql = "DELETE FROM cars WHERE id = :id ";

    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(":id",$_GET['id']);

    $stmt->execute();

    header('location: index.php');
} catch (Exception $e) {
    die($e->getMessage());
}


