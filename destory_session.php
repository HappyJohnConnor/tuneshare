<?php 
session_start();
session_destroy();

$_SESSION['first_name'] = null;
//redirect user to index
header('location:index.php');
?>