<?php
        //Start Session
        session_start();

        //Create Constants to store Non Repeating Values
        define('SITEURL','http://localhost/food-order/');
        define('LOCALHOST', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'food-order');

    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die (mysqli_error()); // Data base connection.
    $db_select = mysqli_select_db($conn, DB_NAME) or die (mysqli_error()); //Selecting Databse.

    if(!isset($_SESSION['user']) && !isset($_SESSION['role'])){
        header('location:login1.php');
    }
?>