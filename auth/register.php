<?php 
    $page_title = "Register";
    require_once "../inc/header.php";
    require_once "../form-handlers/register-handler.php";
?>

<div class="main">
    <!-- Registration Form -->
    <div class="container">
        <h2 class="mt-3">Registration Form</h2>
        <form action="register.php" method="POST" id="reg-form">
            
            <div class="form-group mb-4 mt-3">
                <label for="fname">
                    Full Name
                    <span class="text-danger"><strong> *</strong></span>
                </label>
                <input type="text" id="user_name" name="user_name" class="form-control" required value="<?php
                   echo isset($_SESSION["user_name"]) ? $_SESSION["user_name"] : "";
                ?>">
            </div>

            <div class="form-group mb-4 mt-3">
                <label for="lname">
                    Username
                    <span class="text-danger"><strong> *</strong></span>
                </label>
                <input type="text" id="user_username" name="user_username" class="form-control" required value="<?php
                     echo isset($_SESSION["user_username"]) ? $_SESSION["user_username"] : "";
                ?>">
                <div class="error-msg">
                    <p><?php echo in_array("Username already in use, please choose another", $error_array) ? "Username already in use, please choose another" : "";?></p>
                </div>
            </div>

            <div class="form-group mb-4 mt-3">
                <label for="email">
                    E-mail Adress
                    <span class="text-danger"><strong> *</strong></span>
                </label>
                <input type="email" id="user_email" name="user_email" class="form-control" required value="<?php
                     echo isset($_SESSION["user_email"]) ? $_SESSION["user_email"] : "";
                ?>">
                <div class="error-msg">
                    <p><?php echo in_array("E-mail Address already in use, please choose another", $error_array) ? "E-mail Address already in use, please choose another" : "";?></p>
                </div>
            </div>

            <div class="form-group mb-4 mt-3">
                <label for="password">
                    Password
                    <span class="text-danger"><strong> *</strong></span>
                </label>
                <input type="password" id="user_password" name="user_password" class="form-control" required>
                <div class="error-msg">
                    <p><?php echo in_array("Password should be min 8 characters and max 16 characters", $error_array) ? "Password should be min 8 characters and max 16 characters" : "";?></p>
                    <p><?php echo in_array("Password should contain at least one digit", $error_array) ? "Password should contain at least one digit" : "";?></p>
                    <p><?php echo in_array("Password should contain at least one Capital Letter", $error_array) ? "Password should contain at least one Capital Letter" : "";?></p>
                    <p><?php echo in_array("Password should contain at least one small Letter", $error_array) ? "Password should contain at least one small Letter" : "";?></p>
                    <p><?php echo in_array("Password should contain at least one special character", $error_array) ? "Password should contain at least one special character" : "";?></p>
                    <p><?php echo in_array("Password should not contain any white space", $error_array) ? "Password should not contain any white space" : "";?></p>
                </div>
            </div>

            <div class="form-group mb-4 mt-3">
                <label for="password2">
                    Repeat Password
                    <span class="text-danger"><strong> *</strong></span>
                </label>
                <input type="password" id="user_password2" name="user_password2" class="form-control" required>
                <div class="error-msg">
                    <p><?php echo in_array("Passwords do not match", $error_array) ? "Passwords do not match" : "";?></p>
                </div>
            </div>
            
            <div class="terms-of-use">
                <p>
                    <strong>Already registered? </strong><a href="login.php">Click here to Login</a>
                    <br>
                    By registering to this website, you agree to the <a href="tos.php">Terms Of Service</a>.
                    Your personal data will not be exposed, or compromised.
                    Please read the Terms Of Service before you register.
                </p>
            </div>

            <button name="reg_btn" type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
   
<?php 
    require_once "../inc/footer.php";
?>
