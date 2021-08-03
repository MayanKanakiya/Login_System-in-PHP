<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome-Services Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .active1 {
            background-color: rgb(94, 92, 92);
        }
    </style>
</head>

<body>

    <?php
    // include("/xampp/htdocs/Pratice/login_system_php/home/nav_bar.php");
    // if you are login then only logout button show and reverse if you are logout then only login and signup button can show....
    session_start();
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
                <li class="active1"><a href="/pratice/login_system_php/home/services.php">Services</a></li>
            </ul>';
    if (!$loggedin) {
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a href="/pratice/login_system_php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/pratice/login_system_php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
    }

    if ($loggedin) {

        echo '<ul class="nav navbar-nav navbar-right">
    <li><a href="/pratice/login_system_php//logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li></ul>';
    }
    echo '</ul>
        </div>
    </nav>';
    ?>


    <h2>This is Services page..</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste excepturi unde ipsam vero sit quis quae necessitatibus ullam nesciunt perspiciatis, vel voluptatum perferendis eligendi iure dolores fugiat beatae eaque. Repudiandae amet id vitae magni sunt ab impedit. Distinctio, laboriosam necessitatibus.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi libero laborum reprehenderit cum enim, recusandae incidunt eveniet dolorem distinctio alias tenetur qui natus a sunt. Error odit asperiores quisquam dicta.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste excepturi unde ipsam vero sit quis quae necessitatibus ullam nesciunt perspiciatis, vel voluptatum perferendis eligendi iure dolores fugiat beatae eaque. Repudiandae amet id vitae magni sunt ab impedit. Distinctio, laboriosam necessitatibus.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi libero laborum reprehenderit cum enim, recusandae incidunt eveniet dolorem distinctio alias tenetur qui natus a sunt. Error odit asperiores quisquam dicta.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste excepturi unde ipsam vero sit quis quae necessitatibus ullam nesciunt perspiciatis, vel voluptatum perferendis eligendi iure dolores fugiat beatae eaque. Repudiandae amet id vitae magni sunt ab impedit. Distinctio, laboriosam necessitatibus.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi libero laborum reprehenderit cum enim, recusandae incidunt eveniet dolorem distinctio alias tenetur qui natus a sunt. Error odit asperiores quisquam dicta.</p>

</body>

</html>