<?php
    $host ="localhost";
    $db = "prg5_20221";
    $user ="root";
    $password = "";
    $con = mysqli_connect($host,$user,$password,$db);
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MYSQL : ". mysqli_connect_errno();
    }
?>