<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Love</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Time - love</h1>

            <form action="./viewtimelove.php" method="POST">
                <label for="boy">Tên Bạn Là gì?</label>
                <input type="text" class="form-control" name="boy">
                <p style="color: red;"><?= $_SESSION['boy'] ?? ''?></p>

                <label for="girl" class="mt-2">Người Yêu Bạn tên gì</label>
                <input type="text" class="form-control" name="girl">
                <p style="color: red;"><?= $_SESSION['girl'] ?? ''?></p>

                <label for="datelove"class="mt-2">Ngày bát đầu yêu</label>
                <input type="date" name="datelove" class="form-control">

                <button type="submit" class="mt-2 btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</body>

</html>