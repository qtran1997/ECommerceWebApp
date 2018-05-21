<?php
session_start();
?>
   <html>
    <meta charset="UTF-8">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="index.css">

        <title>Login</title>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menu h4').click(function() {
                    $("nav ul").toggleClass("active");
                })
            })
        </script>
    </head>
    <title>Videos</title>

    <body>
        <div class="nav-wrapper">
            <?php  
            if(isset($_SESSION['id']))
            {
                include 'navloggedin.php';
            }
            else
            {
                include 'navloggedout.php';
            }
            ?>
        </div>

        <!-- Video header picture... Surround all sections within div to prevent navbar failure-->
        <section class="video-top">

        </section>


        <section class="video-content">

<!--
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="video-box">
                                <img src="Images/shore.jpeg" class="img-responsive" alt="">
                                <h3>STEP 1</h3>
                                <button class="btn btn-primary text-center" value="WATCH NOW">WATCH NOW</button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="video-box">
                                <img src="Images/team.jpeg" class="img-responsive" alt="">
                                <h3>STEP 2</h3>
                                <button class="btn btn-primary text-center" value="WATCH NOW">BUY NOW</button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="video-box">
                                <img src="Images/load.jpeg" class="img-responsive" alt="">
                                <h3>STEP 3</h3>
                                <button class="btn btn-primary text-center" value="WATCH NOW">BUY NOW</button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="video-box">
                                <img src="Images/water.jpeg" class="img-responsive" alt="">
                                <h3>STEP 4</h3>
                                <button class="btn btn-primary text-center" value="WATCH NOW">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->




        </section>


<!--
        <section class="footer">

            <?php  
            include 'footer.php';
            ?>

        </section>
-->













    </body>

</html>