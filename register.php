<?php
include 'connect.php';
session_start();

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO users(firstName, lastName, email, password) 
                        VALUES ('$firstName', '$lastName', '$email', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            header("location: login_reg.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['firstName']; 
        $_SESSION['user_id'] = $user['Id'];
        header("location: index.php"); 
        exit();
    } else {
        echo "Invalid email or password!";
    }
}
?>
