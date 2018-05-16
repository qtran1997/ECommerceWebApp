<?php
    session_start();
    include 'dbh.php';

    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

//    echo $email . "<br>";
//    echo $uid . "<br>";
//    echo $pwd . "<br>";

    $salt = "How1Did12You123Get1234Here!!@#420XD102_";
    $pwd = hash('sha256', $salt . $pwd); 
    

    $sql = "SELECT * FROM user WHERE uid='$uid' OR email='$email'";

    $result = mysqli_query($conn, $sql);

    if(!$row = mysqli_fetch_assoc($result))
    {
        $sql = "INSERT INTO user (email, uid, pwd) 
        VALUES ('$email', '$uid', '$pwd')";
        $result = mysqli_query($conn, $sql);
        

        $_SESSION['id'] = $row['id'];
        echo "SUCCESS";
//        header("Location: ../index.php");
    }
    else
    {
        echo "FAILURE";
//        header("Location: ../signuppage.php?failure=1");
    }
?>