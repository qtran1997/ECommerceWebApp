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

        <title>My Account</title>
    </head>

    <body id="account">

        <div class="nav-wrapper">
            <?php  
            include 'navloggedout.php';
            ?>
        </div>


        <div class="account-profile">
            <div class="heading">
                <i class="fas fa-user"></i> Edit Profile
            </div>
            <div class="change-info">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <label for="name">Full Name</label>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="text" placeholder="Mustafa Hayeri" disabled>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <button>EDIT</button>
                        </div>
                    </div>

                    <hr class="w-100 clearfix">

                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <label for="name">Email Address</label>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="email" placeholder="mustafahayeri@yahoo.com" disabled>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <button>EDIT</button>
                        </div>
                    </div>

                    <hr class="w-100 clearfix">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <label for="name">Password</label>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="password" placeholder="********" disabled>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <button>EDIT</button>
                        </div>
                    </div>
                    <hr class="w-100 clearfix">

                    <div class="row edit-field">
                        <div class="col-lg-4 col-md-4">
                            <label for="name">Confirm Password</label>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="password" placeholder="********" disabled>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <button>EDIT</button>
                        </div>
                    </div>
                    <hr class="w-100 clearfix">
                    <button id="save-edits">SAVE CHANGES</button>
                </form>
            </div>
        </div>








        <!--

<section class="footer">
<?php  
include 'footer.php';
?>

</section>
-->


    </body>

</html>