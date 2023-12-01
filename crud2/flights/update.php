<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
</head>
<?php 
require_once 'logic/logic-lay-all-airlines.php';
require_once 'logic/logic-lay-1-theo-id.php'; 
?>

<body>
    <div class="container">
        <div class="row">
            <h1>Sửa</h1>
            <form action="logic/logic-cap-nhat.php" method="post" enctype="multipart/form-data">
                <label for="flight_number">SỐ HIỆU MÁY BAY</label>
                <input type="text" name="flight_number" class="form-control" value="<?= $result['flight_number'] ?>">

                <label for="total_passengers">Số Lượng Hàng Khách</label>
                <input type="text" name="total_passengers" class="form-control" value="<?= $result['total_passengers'] ?>">

                <label for="airline_id">Hãng Bay</label>
                <select name="airline_id" id="airline_id" class="form-control">
                    <?php foreach ($airlines as $airline) : ?>
                        <option <?= $airline['airline_id'] == $result['airline_id'] ? 'selected' : '' ?> value="<?= $airline['airline_id'] ?>"><?= $airline['airline_name'] ?></option>
                    <?php endforeach; ?>
                </select>


                <label for="image" class="mt-2">IMG</label>
                <input type="file" name="image" class="form-control">
                <input type="hidden" name="anh-luutru" value="<?= $result['image'] ?>">
                <img src="<?= $result['image'] ?>" alt="loi" width="100px">

                <label for="description" class="mt-2">MÔ TẢ</label>
                <input type="textarea" name="description" class="form-control" value="<?= $result['description'] ?>">

                <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>
            </form>
        </div>
    </div>

</body>

</html>