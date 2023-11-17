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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1> ProDucts</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $key => $value): ?>
        <tr>
            <th><?= $value['id']?></th>
            <th><?= $value['name']?></th>
            <th><?= $value['image']?></th>
            <th><?= $value['price']?></th>
        </tr>
        <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
