<?php
    $conn = mysqli_connect("localhost", "root", "1234", "AClickLoginData");
//    $conn = mysqli_connect("localhost", "root", "", "logintest");
    
    if (!$conn) {
        die("Connection Failed: ".mysqli_connect_error());
    }
?>