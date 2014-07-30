<?php
//This is an open source project that we adapted to our project. 
//It can be found on github at: https://github.com/peredurabefrog/phpSecureLogin
include_once 'dbconnect.php';
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header('Location: ../blog.php');
    } else {
        // Login failed 
        
        header('Location: ../login.php?error=1');
        
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}

