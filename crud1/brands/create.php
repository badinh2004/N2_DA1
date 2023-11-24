<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm brands</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Thêm Brands</h1>
            <form action="logic/logic-them-moi.php" method="post" enctype="multipart/form-data">
                <label for="name">NAME</label>
                <input type="text" name="name" class="form-control">

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