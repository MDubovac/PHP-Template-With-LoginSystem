<?php 
    $page_title = "Home";
    include "./inc/header.php";
    include "./form-handlers/register-handler.php";
    include "./form-handlers/login-handler.php";
?>

<h1><?php echo isset($_SESSION["auth_user"]) ? "Welcome " . $_SESSION["auth_user"] : "Welcome"; ?></h1>

   
<?php 
    include "./inc/footer.php";
?>
