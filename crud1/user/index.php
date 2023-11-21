<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table User</title>
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
    <?php require_once 'suly/su-ly-danh-sach.php'; ?>
    <caption>
        <h1>Table User</h1>
        <button type="submit"><a href="creat.php">ADD USER</a></button>
    </caption>
    <table>
        <tr style="background-color:#6ACBFC;">
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>IMAGE</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($result as $key => $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['email'] ?></td>
            <td><?= $value['password'] ?></td>
            <td><?= $value['image'] ?></td>
            <td>
                <button type="submit"><a href="update.php?id=<?= $value['id']?>">UPDATE</a></button>
                <button type="submit"><a href="delete.php?id=<?= $value['id']?>">DELETE</a></button>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>