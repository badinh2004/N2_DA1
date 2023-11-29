<?php require_once '../session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</head>

<body>
    <?php
    require_once 'logic/logic-lay-1-theo-id.php';
    require_once 'logic/logic-lay-all-category.php';
    ?>
    <div class="container">
        <div class="row">
            <?php if (!empty($_SESSION['error'])) : ?>
                <div class="alert alert-danger mt-5">
                    <ul>
                        <?php foreach ($_SESSION['error'] as $item) : ?>
                            <li><?= $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <h1>Sửa</h1>
            <form action="logic/logic-cap-nhat.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                <label for="title">NAME</label>
                <input type="text" name="title" class="form-control" value="<?= $result['title'] ?>">

                <label for="category_id">BRAND</label>
                <select name="category_id" id="category_id" class="form-control">
                    <?php foreach ($categories as $category) : ?>
                        <option <?= $category['id'] == $result['category_id'] ? 'selected' : '' ?> value="<?= $category['id'] ?>">
                            <?= $category['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="img" class="mt-2">IMG</label>
                <input type="file" name="img" class="form-control">
                <input type="hidden" name="anh-luutru" value="<?= $result['img'] ?>">
                <img src="<?= $result['img'] ?>" alt="loi" width="100px"><br>

                <label for="description" class="mt-2">MÔ TẢ</label>
                <input type="textarea" name="description" class="form-control" value="<?= $result['description'] ?>">

                <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>
            </form>
        </div>
    </div>

</body>

</html>