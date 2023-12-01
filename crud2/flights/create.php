<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</head>
<?php require_once 'logic/logic-lay-all-airlines.php'; ?>
<body>
    <div class="container">
        <div class="row">
            <h1>Thêm</h1>
            <form action="logic/logic-them-moi.php" method="post" enctype="multipart/form-data">
                <label for="flight_number">SỐ HIỆU MÁY BAY</label>
                <input type="text" name="flight_number" class="form-control">

                <label for="total_passengers">Số Lượng Hàng Khách</label>
                <input type="text" name="total_passengers" class="form-control">

                <label for="airline_id">Hãng Bay</label>
                <select name="airline_id" id="airline_id" class="form-control">
                    <?php foreach($airlines as $airline): ?>
                        <option value="<?=$airline['airline_id'] ?>"><?=$airline['airline_name'] ?></option>
                    <?php endforeach; ?>
                </select>


                <label for="image" class="mt-2">IMG</label>
                <input type="file" name="image" class="form-control">

                <label for="description" class="mt-2">MÔ TẢ</label>
                <input type="textarea" name="description" class="form-control">

                <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>
            </form>
        </div>
    </div>

</body>

</html>