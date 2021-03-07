<?php 
    $page_title = "Login";
    require_once "../inc/header.php";
    require_once "../form-handlers/login-handler.php";
?>

<div class="main">

    <!-- Registration Form -->
    <div class="container">
        <h2 class="mt-3">Login Form</h2>
        <form action="login.php" method="POST" id="login-form">

            <div class="form-group mb-4 mt-3">
                <label for="log_user">
                    Username
                    <span class="text-danger"><strong> *</strong></span>    
                </label>
                <input type="text" id="log_user" name="log_user" class="form-control" required value="<?php
                    echo isset($_SESSION["log_user"]) ? $_SESSION["log_user"] : "";
                ?>">
            </div>

            <div class="form-group mb-4 mt-3">
                <label for="log_pass">
                    Password
                    <span class="text-danger"><strong> *</strong></span>    
                </label>
                <input type="password" id="log_pass" name="log_pass" class="form-control" required>
                <div class="error-msg">
                    <p><?php echo in_array("User does not exist", $error_array) ? "User does not exist" : ""; ?></p>
                </div>
            </div>
            
            <div class="terms-of-use">
                <p>
                    <strong>Don't have an account? </strong><a href="register.php">Click here to Register</a>
                </p>
            </div>

            <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
        </form>
    </div>

</div>
   
<?php 
    require_once "../inc/footer.php";
?>
