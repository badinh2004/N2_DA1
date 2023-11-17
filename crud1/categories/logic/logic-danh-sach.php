<?php
require_once '../connect-db.php';
try {
    $sql = "SELECT * FROM categories ";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die($e->getMessage());
}

// echo '<pre>';
// print_r($result);
