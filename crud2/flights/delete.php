<?php 
require_once 'logic/logic-xoa.php';

if ($_POST['image']) {
    unlink($_POST['image']);
}
header('location: index.php');
?>