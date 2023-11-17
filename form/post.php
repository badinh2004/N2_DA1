<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From - post</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <h1>FROM - post</h1>

            <form action="./handiepost.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="username" class="mt-2">Username</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="password" class="mt-2">Password</label>
                <input type="password" name="password" id="password" class="form-control">

                <button type="submit" class="mt-2 btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</body>

</html>