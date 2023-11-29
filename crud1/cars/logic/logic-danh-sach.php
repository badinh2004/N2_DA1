<?php
require_once '../connect-db.php';

try {
    $sql = 'SELECT 
                c.id as c_id,
                c.name as c_name,
                c.img as c_img, 
                c.sku as c_sku, 
                b.name as b_name 
            FROM cars as c 
            JOIN brands as b
               ON b.id = c.brand_id
            ';

    $stmt = $conn -> prepare($sql);
    
    $stmt -> execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    die($e->getMessage());
}
?>