<?php 
    session_start();
    require_once "./core/config.php";
    require_once "./core/db.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title><?php echo isset($page_title) ? APP_NAME . " | " . $page_title : APP_NAME; ?></title>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PhpApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tos.php">Terms Of Service</a>
                    </li>
                    
                    <?php  
                        if(isset($_SESSION["auth_user"])){
                           echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="profile.php">Profile</a></li>';
                           echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="logout.php">Logout</a></li>';
                        } else {
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="register.php">Register</a></li>';
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">Login</a></li>';
                        }
                    ?>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>