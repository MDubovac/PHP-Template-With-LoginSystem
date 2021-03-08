<?php
/* 
 * Database Parameters
 * Database Connection
 */

// Database params
define("HOST_NAME", "Host name here...");
define("USER_NAME", "User here ...");
define("DB_PASSWORD", "Password herre ...");
define("DB_NAME", "DB Name here .."); 

// Conection
$conn = mysqli_connect(HOST_NAME, USER_NAME, DB_PASSWORD, DB_NAME);

if(!$conn){
    die("Databse Error: " . mysqli_connect_error());
}