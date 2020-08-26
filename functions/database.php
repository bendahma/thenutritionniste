<?php 

// Define the connection to the database CONSTANT 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nutrition');
// connect to the database
$connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME) ;
// if we can't connect to the database die and print the error message
if(!$connect){
    die(mysqli_error($connect));
}


?>