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
    <?php require_once 'suly/su-ly-id.php'; ?>
    <div class="container">
        <div class="row">
            <h1>UPDATE-FROM</h1>
            <form action="suly/su-ly-cap-nhat.php" method="post">
                <input type="hidden" name="id" value="<?= $_GET['id'];?>">

                <label for="name">NAME</label>
                <input type="text" name="name" class="form-control" value="<?=$result['name'] ?>">

                <label for="email" class="mt-2">EMAIL</label>
                <input type="text" name="email" class="form-control" value="<?=$result['email'] ?>">

                <label for="password" class="mt-2">PASSWORD</label>
                <input type="text" name="password" class="form-control" value="<?=$result['password'] ?>">

                <label for="name" class="mt-2">IMAGE</label>
                <input type="file" name="image" class="form-control">

                <button type="submit" class="mt-2 btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
</body>

</html>