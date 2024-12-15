<?php 
session_start();
require './connect.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $user_id = $_POST['user_id'];
    $user_image = $_POST['image'];

    if($user_image){
        $update_user = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', password='$password', Gender='$gender',
        PhoneNumber='$phone', Address='$address', user_image='$user_image' WHERE Id='$user_id'";
        $result = mysqli_query($conn,$update_user);
    }
    else{
        $update_user = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', password='$password', Gender='$gender',
        PhoneNumber='$phone', Address='$address' WHERE Id='$user_id'";
        $result = mysqli_query($conn,$update_user);
    }




header("location: profile.php?user_id=".$user_id);


?>