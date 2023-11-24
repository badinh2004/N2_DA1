<?php
require_once '../connect-db.php';

try {
    $sql = 'SELECT * FROM brands ';

    $stmt = $conn -> prepare($sql);
    
    $stmt -> execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    die($e->getMessage());
}
?>