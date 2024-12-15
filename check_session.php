<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['username'])) {
    echo json_encode(['loggedIn' => true, 'username' => $_SESSION['username']]);
} else {
    echo json_encode(['loggedIn' => false]);
}
?>
