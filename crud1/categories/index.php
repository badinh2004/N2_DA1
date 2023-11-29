<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Danh mục</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php require_once 'logic/logic-danh-sach.php'; ?>
    <caption>
        <h1>Danh sách danh mục</h1>
        <a class="btn btn-info" href="../index.php">Trở về tổng quan</a>
        <a class="btn btn-info" href="create.php">Thêm mới</a>
    </caption>
    <table class="table table-hover">


        <thead>
            <tr class="table-active">
                <th>ID</th>
                <th>Name</th>
                <th>Img</th>
                <th>IsActive</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($result as $key => $value) : ?>

                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td>
                        <img src="<?= $value['img'] ?>" width="100px" alt="loi">
                    </td>
                    <td>
                        <?= $value['is_active'] ? 'Yes' : 'No'  ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="update.php?id=<?= $value['id'] ?>">Cập nhật</a>
                        <form action="delete.php?id=<?= $value['id'] ?>" method="post">
                            <input type="hidden" name="img" value="<?= $value['img'] ?>">
                            <button type="sumit" class="btn btn-info mt-2" onclick="return confirm('có chắc chắn xóa không ?')">Xóa</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>
</body>

</html>