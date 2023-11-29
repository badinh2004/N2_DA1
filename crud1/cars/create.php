<?php require_once '../session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm cars</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</head>

<body>
    <?php require_once 'logic/logic-lay-all-brands.php'; ?>
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

            <h1>Thêm cars</h1>
            <form action="logic/logic-them-moi.php" method="post" enctype="multipart/form-data">
                <label for="name">NAME</label>
                <input type="text" name="name" class="form-control">

                <label for="name" class="mt-2">SKU</label>
                <input type="text" name="sku" class="form-control">

                <label for="brand_id">BRAND</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <?php foreach ($brands as $brand) : ?>
                        <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="img" class="mt-2">IMG</label>
                <input type="file" name="img" class="form-control">

                <label for="description" class="mt-2">MÔ TẢ</label>
                <input type="textarea" name="description" class="form-control">

                <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>
            </form>
        </div>
    </div>

</body>

</html>