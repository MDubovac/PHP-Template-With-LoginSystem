<?php 
    $page_title = "Profile";
    include "./inc/header.php";
    include "./form-handlers/register-handler.php";
    include "./form-handlers/login-handler.php";
?>

<h1><?php echo isset($_SESSION["auth_user"]) ? "User:  " . $_SESSION["auth_user"] : "User: "; ?></h1>

   
<?php 
    include "./inc/footer.php";
?>
