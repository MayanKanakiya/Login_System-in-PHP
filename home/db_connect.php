<?php
    $server="localhost";
    $username="root";
    $pwd="";
    $dbname="user01";

    $con=mysqli_connect($server,$username,$pwd,$dbname);
    if($con){
        // echo "Success";
    }
    else{
        die("Error:".mysqli_connect_errno());
    }
?>