<?php 
require_once 'logic/logic-xoa.php';

if ($_POST['img']) {
    unlink($_POST['img']);
}
header('location: index.php');
?>