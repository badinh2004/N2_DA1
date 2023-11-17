<?php
session_start();

$nam = $_POST['boy'];
$nu  = $_POST['girl'];

$flag = true;

if (strlen($nam) < 10 || strlen($nam) > 50) {
    $_SESSION['boy'] = "số lượng ký tự phải nằm trong khoảng 10 -> 50";
    $flag = false;
}

if (strlen($nu) < 10 || strlen($nu) > 50) {
    $_SESSION['girl'] = "số lượng ký tự phải nằm trong khoảng 10 -> 50";
    $flag = false;
}

if ($flag) {

    session_destroy(); // Xóa trắng

    echo "Nam : " . $nam . "<br>";
    echo "Nữ : " . $nu . "<br>";

$starsdatelove = strtotime($_POST['datelove']) / 86400;
$date = strtotime("now") / 86400;
$daylove = ($date - $starsdatelove);

echo (int)$starsdatelove . "<br>";
echo (int)$date . "<br>";
echo "daylove : " . (int)$daylove . "<br>";
}else{
    header("location: ./timelove.php");
}


