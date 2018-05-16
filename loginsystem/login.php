<?php
    session_start();
    include 'dbh.php';

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $salt = "How1Did12You123Get1234Here!!@#420XD102_";

    $pwd = hash('sha256', $salt . $pwd); 

    $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";

    $result = mysqli_query($conn, $sql);
    
    if(!$row = mysqli_fetch_assoc($result))
    {
        echo "FAILURE";
//        header("Location: ../loginpage.php?failure=1");
        
    }
    else
    {
        echo "SUCCESS";
        $_SESSION['id'] = $row['id'];
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['email'] = $row['email'];
    
//        header("Location: ../accountpage.php");
    }
    
    
?>