<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sach Danh Muc</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-radius:10px ;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #A9EAFB;
        }
        
    </style>
</head>

<body>
    <?php
    require_once 'logic/logic-danh-sach.php'; ?>
    <table class="table">
        <caption>
            <h1>Danh Sách Danh Mục</h1>
            <a href="creat.php"><button type="submit"> Thêm Mới</button></a>
        </caption>
        <thead class="thead-dark">
            <tr style="background-color:#6ACBFC;">
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">IsActive</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td>
                        <img src="<?= $value['image'] ?>" alt="loi">
                    </td>
                    <td>
                        <?= $value['is_active'] ? 'yes' : 'no' ?>
                    </td>
                    <td>
                    <a href="update.php?id=<?= $value['id'] ?>"><button type="submit">Cập Nhật</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>