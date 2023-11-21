<?php
require_once '../../connect-db.php';

try {
    $sql = "
    INSERT INTO user (name,email,password,image) 
    VALUE(:name,:email,:password,:image);";

    $stmt = $conn -> prepare($sql);

    $stmt -> bindParam(':name',$_POST['name']);
    $stmt -> bindParam(':email',$_POST['email']);
    $stmt -> bindParam(':password',$_POST['password']);
    $stmt -> bindParam(':image',$_POST['image']);

    $stmt -> execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    header('location: ../index.php');
} catch (Exception $e) {
    die($e -> getMessage());
}
?>