<?php 
    $page_title = "Home";
    require_once "./inc/header.php";
    require_once "./form-handlers/register-handler.php";
    require_once "./form-handlers/login-handler.php";
?>

<h1><?php echo isset($_SESSION["auth_user"]) ? "Welcome " . $_SESSION["auth_user"] : "Welcome"; ?></h1>

   
<?php 
    require_once "./inc/footer.php";
?>
