<?php
require_once '../connect-db.php';

try {
    $sql = 'SELECT
                p.id as p_id,
                p.title as p_title,
                p.img as p_img,
                c.name as c_name
            FROM posts as p
            JOIN categories as c
                ON c.id = p.category_id
                ';
    
    $stmt = $conn -> prepare($sql);

    $stmt -> execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}
?>