<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="index.css"> 

        <title>Login</title>
    </head>
    <body id="formscreen">

        <!-- NAVBAR -->
        <div class="nav-wrapper">
            <?php  
            if(isset($_SESSION['id'])) {
                include 'navloggedin.php';
            }
            else {
                include 'navloggedout.php';
            }
            
            ?>
        </div>

        <div class="container-form" id="signin-form">
            <div class="wrapper">
                <div class="header">Log In to Your Account</div>

                <div class="contact">
                    <form action="loginsystem/loginsubmit.php" method="POST">
                        <?php
                        $failure = "";
                        if(!empty($_GET['failure'])) {
                            $failure = $_GET['failure'];
                        }
                        if($failure == 1) {
                            echo "<p class='error'>Your information is incorrect!</p>";
                        }
                        ?>
                        <p> 
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input type="password" name="pwd" required>
                        </p>
                        <p class="full">
                            <button>Log In</button>
                            <a href="changepwd.php">Forgot Password?</a>
                        </p>
                        <div class="privacy">
                            By logging in, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                        </div>
                    </form>
                </div>
                <div class="footer" id="signin-footer">Don't have an account?<a href="signup.php" class="link"> Sign Up</a></div>
            </div>
        </div>


        <section class="footer">
            <?php  
            include 'footer.php';
            ?>
        </section>
    </body>
</html>