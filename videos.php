<html>
    <meta charset="UTF-8">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="index.css"> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

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
        <div class="wrapper">
            <?php  
            include 'navloggedout.php';
            ?>
        </div>

        <!-- Video header picture... Surround all sections within div to prevent navbar failure-->
        <section class="video-top">

        </section>


        <section class="video-content">
            <!--
<div class="videoWrapper">
<iframe width="560" height="315" src="https://www.youtube.com/embed/uGcjAKZ5TUk?controls=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>      
</div>
-->
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




        </section>


        <section class="footer">

            <?php  
            include 'footer.php';
            ?>

        </section>













    </body>

</html>