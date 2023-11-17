<?php
require_once '../../connect-db.php';
try {
    $sql = "
    UPDATE categories 
    SET 
        name      = :name,
        image     = :image,
        is_active = :is_active
    WHERE 
        id        = :id;
";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name',      $_POST['name']);
    $stmt->bindParam(':image',     $_POST['image']);
    $stmt->bindParam(':is_active', $_POST['is_active']);
    $stmt->bindParam(':id',        $_POST['id']);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}
// echo '<pre>';
// print_r($result);
