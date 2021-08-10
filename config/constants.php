<?php

// creaste constants to store non repeating values
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

 //  3.Excecute Query and save iData in Database
 $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database connection
 $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting database
?>