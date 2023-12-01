<?php 

require_once 'session.php';
unset($_SESSION['user']);

header('location: login.php');
exit();
?>
