<?php
    $conn = mysqli_connect("http://ec2-54-183-8-67.us-west-1.compute.amazonaws.com", "root", "1234", "AClickLoginData");
//    $conn = mysqli_connect("localhost", "root", "", "logintest");
    
    if (!$conn) {
        die("Connection Failed: ".mysqli_connect_error());
    }
?>