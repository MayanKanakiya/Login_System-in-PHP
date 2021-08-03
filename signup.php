<?php
$alert1 = false;
$showerror = false;
// if (isset($_POST['s'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("home/db_connect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists = false;
    // Check whether this username exitsts
    $existssql = "SELECT * FROM `login` WHERE uname ='$username'";
    $result = mysqli_query($con, $existssql);
    $numexitsrows = mysqli_num_rows($result);
    if ($numexitsrows > 0) {
        // $exists=true;
        $showerror = "Username Already Exists!!";
    } else {
        $exists = false;
        if (($password == $cpassword)) {
            // Password hashing is a one way process...
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `login` (`uname`, `pwd`, `time`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $alert1 = true;
            }
        } else {
            $showerror = "Your Password Not Match!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-Signup Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .margin {
            margin: 25px 0px;
        }

        #btn2 {
            background-color: royalblue;
            color: white;
        }

        #btn2:hover {
            color: lightgray;
        }

        .active1 {
            background-color: rgb(94, 92, 92);
        }
    </style>

</head>

<body>
    <?php
    // if you are login then only logout button show and reverse if you are logout then only login and signup button can show....
    // include("/xampp/htdocs/Pratice/login_system_php/home/nav_bar.php");
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
                <li class="active1"><a href="/pratice/login_system_php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
    <h2>Welcome Signup Page!</h2>
    <!-- Alert Meassege -->
    <?php
    if ($alert1) {
        echo "<div id='style2' class='alert alert-success alert-dismissible fade in margin'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Success!</strong> Your Account Created Successfully..
                        </div>";
    }
    ?>
    <?php
    if ($showerror) {
        echo "<div id='style2' class='alert alert-warning alert-dismissible fade in margin'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong> Error! </strong> "  . $showerror . "
                        </div>";
    }
    ?>
    <!-- Signup form design.. -->
    <div class="container">
        <h2>Signup:</h2>
        <form action="/pratice/login_system_php/signup.php" method="post">
            <div class="form-group">
                <label for="username">UsreName:</label>
                <input type="text" class="form-control" required id="username" placeholder="Enter Username" name="username">
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" class="form-control" required id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password:</label>
                <input type="password" class="form-control" required id="cpassword" placeholder="Enter Confirm  password" name="cpassword">
            </div>
            <button type="submit" id="btn2" class="btn btn-default">Submit</button>
        </form>
    </div>
    <!-- Prevent Duplicate[page refersh] value in database -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>