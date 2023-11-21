<?php

require_once '../../connect-db.php';

try {
    $sql = "
        INSERT INTO categories (name, image, is_active)
        VALUES (:name, :image, :is_active);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':is_active', $_POST['is_active']);

    $image = $_FILES['image'] ?? null;
    // Xử lý upload ảnh
    if ($image) { // Khi mà có upload ảnh lên thì mới xử lý upload

        $pathUpload = '../uploads/' . $image['name'];
        $pathSaveDB = 'uploads/' . $image['name'];

        // Upload file lên để lưu trữ
        if (move_uploaded_file($image['tmp_name'], $pathUpload)) {
            $stmt->bindParam(':image', $pathSaveDB);
        } else {
            $pathSaveDB = '';
            $stmt->bindParam(':image', $pathSaveDB);
        }
    } else {
        $stmt->bindParam(':image', $image);
    }

    $stmt->execute();

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}