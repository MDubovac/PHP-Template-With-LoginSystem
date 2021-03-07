<?php
/* 
 * Database Parameters
 * Database Connection
 */

// Database params
define("HOST_NAME", "localhost");
define("USER_NAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "phpapp"); 

// Conection
$conn = mysqli_connect(HOST_NAME, USER_NAME, DB_PASSWORD, DB_NAME);

if(!$conn){
    die("Databse Error: " . mysqli_connect_error());
}