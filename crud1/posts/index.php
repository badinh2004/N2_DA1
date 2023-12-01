<?php 
require_once '../session.php'; 
if (empty($_SESSION['user'])) {
    header('location: ../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php require_once 'logic/logic-danh-sach.php'; ?>

    <h1>posts</h1>
    <a href="../index.php" class="btn btn-info">Trở về tổng quan</a>
    <a href="create.php" class="btn btn-info">Thêm</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>CATEGORY</th>
                <th>TITLE</th>
                <th>IMG</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $value) : ?>
                <tr>
                    <td><?= $value['p_id'] ?></td>
                    <td><?= $value['c_name'] ?></td>
                    <td><?= $value['p_title'] ?></td>
                    <td><img src="<?= $value['p_img'] ?>" alt="loi" width="100px"></td>
                    <td>
                    <a class="btn btn-info" href="update.php?id=<?= $value['p_id'] ?>">sửa</a>
                        <form action="delete.php?id=<?= $value['p_id'] ?>" method="post">
                            <input type="hidden" name="img" value="<?= $value['p_img'] ?>">
                            <button type="submit" onclick="return confirm('bạn có chắc chắn xóa ? ')" class="btn btn-info mt-2">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>