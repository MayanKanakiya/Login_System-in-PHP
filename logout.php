<?php
session_start();
session_unset();
session_destroy();
header("location:login.php");
exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Your Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .active1 {
            background-color: rgb(94, 92, 92);
        }
    </style>
</head>

<body>

</body>

</html>
<?php
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
                <li><a href="/pratice/login_system_php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
}
if ($loggedin) {
    echo '<ul class="nav navbar-nav navbar-right">
    <li class="active1"><a href="/pratice/login_system_php//logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li></ul>';
}
echo '</ul>
        </div>
    </nav>';
?>