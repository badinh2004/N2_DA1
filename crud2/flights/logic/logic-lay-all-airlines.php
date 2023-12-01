<?php 
require_once '../connect-db.php';

try {
    $sql = 'SELECT * FROM airlines';

$stmt = $conn -> prepare($sql);

$stmt -> execute();

$airlines = $stmt -> fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}