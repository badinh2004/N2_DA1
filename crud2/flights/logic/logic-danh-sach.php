<?php 
require_once '../connect-db.php';

try {
    $sql = 'SELECT 
               cb.flight_id ,
               cb.flight_number ,
               cb.image ,
               cb.total_passengers ,
               hb.airline_name 
            FROM flights as cb
            JOIN airlines as hb
                ON cb.airline_id = hb.airline_id
            ';

$stmt = $conn -> prepare($sql);

$stmt -> execute();

$result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}