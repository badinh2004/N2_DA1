<?php 
echo "Name : ".$_POST['Name']."<br>";
echo "Email : ".$_POST['email']."<br>";
echo "Phone : ".$_POST['phone']."<br>";
echo "Date : ".$_POST['date']."<br>";
echo "Starttime : ".$_POST['starttime']."<br>";
echo "Endtime : ".$_POST['endtime']."<br>";
echo "Số Lượng : ".$_POST['sl']."<br>";
$thanhtien = $_POST['sl']*10000;
echo "Thành Tiền : ".$thanhtien."<br>";
?>
