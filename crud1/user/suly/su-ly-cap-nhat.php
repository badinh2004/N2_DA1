<?php
require_once '../../connect-db.php';

try {
    $sql = "
    UPDATE user SET name = :name , email = :email , password = :password , image = :image WHERE id = :id
    ";

    $stmt = $conn -> prepare($sql);

    $stmt -> bindParam(':name',$_POST['name']);
    $stmt -> bindParam(':email',$_POST['email']);
    $stmt -> bindParam(':password',$_POST['password']);
    $stmt -> bindParam(':image',$_POST['image']);
    $stmt -> bindParam(':id', $_POST['id']);

    $stmt -> execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    header('location: ../index.php');
} catch (Exception $e) {
    die($e -> getMessage());
}
?>