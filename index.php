<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css"> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menu h4').click(function() {
                    $("nav ul").toggleClass("active");
                })
            })
        </script>
        <title>Sheek Ticker</title>

    </head>
    <body>

        <!-- NAVBAR -->
        <div class="wrapper">
            <?php  
            include 'navloggedout.php';
            ?>
        </div>

        <!-- 3 SECTIONS FOR LOADING PAGE -->
        <section class="top">
            <!--
<video autoplay muted loop id="myVideo">
<source src="Images/Mock-up.mp4" type="video/mp4">
Your browser does not support HTML5 video.
</video>
-->
        </section>

        <section class="middle">
            <hr class="w-100 clearfix d-md-none">
            <h1>Welcome to Sheek Clicker</h1>
            <hr class="w-100 clearfix d-md-none">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <img src="Images/load.jpeg" class="img-responsive">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrap-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum, dignissimos quos officia quas consequuntur. Delectus rem pariatur dolor perferendis, nemo, praesentium libero eius debitis incidunt qui asperiores officiis similique.</p>
                        <div class="wrap">
                            <button class="btn">CLICK ME</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrap-text">
                        <img src="Images/water.jpeg" class="img-responsive">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrap-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum, dignissimos quos officia quas consequuntur. Delectus rem pariatur dolor perferendis, nemo, praesentium libero eius debitis incidunt qui asperiores officiis similique.</p>
                        <div class="wrap">
                            <button class="btn">CLICK ME</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="w-100 clearfix d-md-none">

            <!-- SOMETHING NEEDS TO GO HERE! -->
            <h1 id="section-middle-header">something should go here</h1>
            <div class="ptext">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt a assumenda quos, repellat sapiente aut enim, corporis commodi earum rerum quidem, vitae aspernatur et eos non, nemo soluta cum qui error neque porro veritatis ad adipisci amet! Iure dolores nihil magnam sapiente maiores modi repudiandae deleniti. Iusto maxime, est. Vel corporis natus reprehenderit iusto est impedit in adipisci aliquid voluptatum.</p>

            </div>
        </section>

        <section class="footer">
            <?php  
            include 'footer.php';
            ?>

        </section>

    </body>
</html>