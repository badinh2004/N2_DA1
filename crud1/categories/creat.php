<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Danh Mục</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
        <div class="container">
            <div class="row">
                <h1>FROM - Thêm Mới Danh Mục</h1>

                <form action="logic/logic-them-moi.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">

                    <label for="image" class="mt-2">Image</label>
                    <input type="file" name="image" id="image" class="form-control">

                    <label for="is_active" class="mt-2">IS_Active</label>
                    <select name="is_active" id="is_active" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>

                    <button type="submit" class="mt-2 btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

</body>

</html>