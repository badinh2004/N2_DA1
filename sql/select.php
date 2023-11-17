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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> ProDucts</h1>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>image</th>
            <th>price</th>
        </tr>
        <?php foreach($result as $key => $value): ?>
        <tr>
            <th><?= $value['id']?></th>
            <th><?= $value['name']?></th>
            <th><?= $value['image']?></th>
            <th><?= $value['price']?></th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
