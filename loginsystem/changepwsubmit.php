<?php
    session_start();
    include 'dbh.php';

    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];

    $index = $_SESSION['id'];

    if($pwd1 == $pwd2)
    {
        $salt = "How1Did12You123Get1234Here!!@#420XD102_";
        $pwd = hash('sha256', $salt . $pwd1); 
        
        $sql = "UPDATE aclicker-login-database SET pwd= '$pwd' WHERE id ='$index'";
        $result = mysqli_query($conn, $sql);


//        header("Location: ../accountpage.php");
        
    }
    else
    {
//        header("Location: ../changepasswordpage.php?failure=1");
    }
    
    
    
?>