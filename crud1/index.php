<?php 
require_once 'session.php';
if (empty($_SESSION['user'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang MENU</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Trang Tổng Quan</h1>

            <nav>
                <a class="btn btn-info" href="categories/index.php">DANH MỤC</a>
                <a class="btn btn-info" href="brands/index.php">THƯƠNG HIỆU</a>
                <a class="btn btn-info" href="cars/index.php">XE</a>
                <a class="btn btn-info" href="posts/index.php">POST</a>
                <a class="btn btn-info" href="logout.php">đăng xuất</a>
                <?php echo '<pre>';
                      print_r($_SESSION['user'])
                      ?>
            </nav>
        </div>
    </div>

</body>

</html>