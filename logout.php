<?php 

// Logout script here ...
session_start();
session_unset();
session_destroy();

header("Location: index.php");