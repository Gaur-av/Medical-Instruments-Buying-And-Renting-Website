<?php


    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'userlogin';


    $conn = mysqli_connect($host, $user, $password, $dbname);

    if ( !$conn ){
        echo "Connection Failed";
    }
?>