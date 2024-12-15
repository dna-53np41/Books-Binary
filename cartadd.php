<?php

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require './connect.php';
$bookid=$_POST['book_id'];
$bookimage=$_POST['book_image'];
$bookname=$_POST['book_name'];
$bookprice=$_POST['price'];

$user_id = $_SESSION['user_id'];

$insertQuery = "INSERT INTO cart(book_id, user_id, book_image, book_name, price) 
                        VALUES ('$bookid', '$user_id', '$bookimage', '$bookname', '$bookprice')";

$result = $conn->query($insertQuery);

header('location:cart.php?user_id='.$user_id);

?>