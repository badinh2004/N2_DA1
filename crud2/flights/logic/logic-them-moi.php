<?php
require_once '../../connect-db.php';

try {
    $sql = 'INSERT INTO flights(
        flight_number,
        image,
        total_passengers,
        description,
        airline_id
    )
    VALUES(
        :flight_number,
        :image,
        :total_passengers,
        :description,
        :airline_id
    )
    ';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':flight_number', $_POST['flight_number']);
    $stmt->bindParam(':total_passengers', $_POST['total_passengers']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':airline_id', $_POST['airline_id']);

    $img = $_FILES['image'] ?? null;
    $luuanh = '';
    if ($img) {
        $anhlen = __DIR__ . '/../uploads/' . $img['name'];
        if (move_uploaded_file($img['tmp_name'], $anhlen)) {
            $luuanh = 'uploads.' . $img['name'];
        }
    }
    $stmt->bindParam(':img', $luuanh);

    $stmt->execute();

    header('location: ../index.php');
} catch (PDOException $e) {
    die($e->getMessage());
}
