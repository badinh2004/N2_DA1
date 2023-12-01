<?php
require_once 'session.php';
if (!empty($_POST)) {
    $username = 'admin';
    $password = '123456';

    if ($username == $_POST['username'] && $password == $_POST['password']) {
        $_SESSION['user'] = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];
        header('location: index.php');
        exit();
    } else {
        echo "tài khoản / mật khẩu không chính xác";
    }
}
?>
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
            <form action="" method="post">
                <label for="username">USERNAME</label>
                <input type="text" name="username" class="form-control">

                <label for="password">PASSWORD</label>
                <input type="text" name="password" class="mt-2 form-control">

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>