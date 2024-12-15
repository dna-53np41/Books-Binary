<?php

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require './connect.php';

$user_id = $_GET['userid'];

$dlt = "DELETE FROM cart WHERE user_id=$user_id";
$result = mysqli_query($conn,$dlt);

header('location:thanks.php');
?>