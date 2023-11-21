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
    <div class="container">
        <div class="row">
            <h1>ADD_FORM</h1>
            <form action="suly/su-ly-them-moi.php" method="post">
                <label for="name">NAME</label>
                <input type="text" name="name" class="form-control">

                <label for="email" class="mt-2">EMAIL</label>
                <input type="text" name="email" class="form-control">

                <label for="password" class="mt-2">PASSWORD</label>
                <input type="text" name="password" class="form-control">

                <label for="name" class="mt-2">IMAGE</label>
                <input type="file" name="image" class="form-control">

                <button type="submit" class="mt-2 btn btn-primary">ADD</button>
            </form>
        </div>
    </div>
</body>

</html>