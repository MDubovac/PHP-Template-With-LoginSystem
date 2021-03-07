<?php 
    $page_title = "Profile";
    require_once "../inc/header.php";
    require_once "../form-handlers/register-handler.php";
    require_once "../form-handlers/login-handler.php";
?>

<h1><?php echo isset($_SESSION["auth_user"]) ? "User:  " . $_SESSION["auth_user"] : "User: "; ?></h1>

   
<?php 
    require_once "../inc/footer.php";
?>
