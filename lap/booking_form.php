<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Room</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript  -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
</head>

<body>
    <h1>Meeting Room Book Form</h1>
    <div class="container">
        <div class="row">
            <form action="./form.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="Name" class="form-control">

            <label for="email" class="mt-2">Email</label>
            <input type="email" name="email" class="form-control">

            <label for="phone" class="mt-2">Phone</label>
            <input type="tel" name="phone" class="form-control">

            <label for="date" class="mt-2">Date</label>
            <input type="date" name="date" class="form-control">

            <label for="starttime" class="mt-2">Start Time</label>
            <input type="time" name="starttime" class="form-control">

            <label for="endtime" class="mt-2">End time</label>
            <input type="time" name="endtime" class="form-control">

            <label for="sl" class="mt-2">Số lượng</label>
            <input type="number" name="sl" class="form-control">

            <button type="submit" class="mt-2 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>