<?php 
require_once 'pdo.php';

try {
    $sql = "SELECT * FROM products";
    // chuẩn bị câu truy vẫn
    $stmt = $conn ->prepare($sql);
    // // gán giá trị cho các biến để tránh bị lối SQL Ịnection
    // // Hàm bindParam sẽ thự động xử lý dữ liệu sao cho phù hợp
    // $stmt -> bindParam(':table_name',$tableName);
    // thực hiện câu truy vấn
    $stmt -> execute();
    //fetchall để lấy ra dữ liệu
    // PDO::FETCH_ASSOC - chuyển đổi dữ liệu lấy ra thành kiểu mảng column_name => value
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "error : ".$e ->getMessage();
    die;
}

echo '<prer>';
print_r($result);
