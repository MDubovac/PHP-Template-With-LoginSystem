<?php 
    $page_title = "Home";
    require_once "./inc/header.php";
    require_once "./form-handlers/register-handler.php";
    require_once "./form-handlers/login-handler.php";
?>

<div id="home" class="pt-5s px-5">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to the Application</h1>
        <p class="lead">
            This is a starter template for PHP Devs. It comes with Login System, Bootstrap and Font Awesome.
        </p>
        <hr class="my-4">
        <p>
            This project is Open-Source, so feel free to tinker with it.
        </p>
        <p class="lead">
            <a class="btn btn-primary" href="login.php" role="button">Log In</a>
        </p>
    </div>
</div>


<?php 
    require_once "./inc/footer.php";
?>
