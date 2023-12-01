<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang MENU</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<?php 
require_once 'logic/logic-danh-sach.php';
 ?>
<body>
    <div class="container">
        <div class="row">
            <h1>Trang Danh Sách Chuyến Bay</h1>
            <a class="btn btn-info" href="create.php">Thêm</a>
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SỐ HIỆU CHUYẾN BAY</th>
                    <th>HÃNG BAY</th>
                    <th>TỔNG KHÁCH HÀNG</th>
                    <th>IMG</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $key => $value): ?>
                    <tr>
                        <td><?=$value['flight_id'] ?></td>
                        <td><?=$value['flight_number'] ?></td>
                        <td><?=$value['airline_name'] ?></td>
                        <td><?=$value['total_passengers'] ?></td>
                        <td><img src="<?=$value['image'] ?>" alt=""></td>
                        <td>
                        <a class="btn btn-info" href="update.php?id=<?= $value['flight_id'] ?>">sửa</a>
                        <form action="delete.php?id=<?= $value['flight_id'] ?>" method="post">
                            <input type="hidden" name="image" value="<?= $value['image'] ?>">
                            <button type="submit" onclick="return confirm('bạn có chắc chắn xóa ? ')" class="btn btn-info mt-2">Xóa</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>

</body>

</html>