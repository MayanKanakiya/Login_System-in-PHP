<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thanks for login - <?php echo $_SESSION['username']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <!-- if you are login then only logout button show and reverse if you are logout then only login and signup button can show.... -->
    <?php //include("/xampp/htdocs/Pratice/login_system_php/home/nav_bar.php"); 
    // session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $loggedin = true;
    } else {
        $loggedin = false;
    }
    echo ' <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/pratice/login_system_php/home/index.php">PHP</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="/pratice/login_system_php/home/index.php">Home</a></li>
                <li class=""><a href="/pratice/login_system_php/home/about.php">About</a></li>
                <li class=""><a href="/pratice/login_system_php/home/contact.php">Contact Us</a></li>
                <li class=""><a href="/pratice/login_system_php/home/services.php">Services</a></li>
            </ul>';
    if (!$loggedin) {
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a href="/pratice/login_system_php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="active1"><a href="/pratice/login_system_php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
    }
    if ($loggedin) {
        echo '<ul class="nav navbar-nav navbar-right">
    <li><a href="/pratice/login_system_php//logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li></ul>';
    }
    echo '</ul>
        </div>
    </nav>';
    ?>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']; ?><h4>
                <p>Hey! How are you doing welcome to our php website.You are logged in as <?php echo $_SESSION['username']; ?>?Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php">Using this link</a></p>
    </div>
</body>

</html>