<?php
require_once '../../connect-db.php';
try {
    $sql = "
    INSERT INTO categories (name,image,is_active)
    VALUE (:name,:image,:is_active);
";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name',      $_POST['name']);
    $stmt->bindParam(':image',     $_POST['image']);
    $stmt->bindParam(':is_active', $_POST['is_active']);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}
// echo '<pre>';
// print_r($result);
