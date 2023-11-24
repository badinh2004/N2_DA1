<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bảng brands</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        button {
            background-color: red;
            color: white;
            border: 2px solid red;
            border-radius: 4px;
        }

        a.non-textdecoration {
            color: red;
            text-decoration: none;
        }

        a:visited {
            color: white;
        }
    </style>
</head>

<body>
    <?php require_once 'logic/logic-danh-sach.php' ?>
    <caption>
        <h1>Brands</h1>
    </caption>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>IMG</th>
            <th>ACTION</th>
        </tr>
        <?php foreach ($result as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><img src="<?= $value['img'] ?>" alt="loi" width="200px"></td>
                <td>
                    <button type="submit">
                        <a href="update.php?id=<?= $value['id'] ?>">sửa</a>
                    </button><br>
                    <form action="delete.php?id=<?= $value['id'] ?>" method="post">
                        <input type="hidden" name="img" value="<?= $value['img'] ?>">
                        <button type="submit" onclick="return confirm('bạn có chắc chắn xóa ? ')" class="mt-2">Xóa</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button type="submit"><a href="create.php">Thêm</a></button>

</body>

</html>