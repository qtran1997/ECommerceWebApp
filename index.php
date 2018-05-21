<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="index.css"> 

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

        </section>

        <section class="middle-first">
            <div>
                <hr class="w-100 clearfix d-md-none">
                <h1>Welcome to Sheek Clicker</h1>
                <hr class="w-100 clearfix d-md-none">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <img src="Images/load.jpeg" class="img-responsive col-12">
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
                        <img src="Images/water.jpeg" class="img-responsive col-12">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrap-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum, dignissimos quos officia quas consequuntur. Delectus rem pariatur dolor perferendis, nemo, praesentium libero eius debitis incidunt qui asperiores officiis similique.</p>
                        <div class="wrap">
                            <button class="btn">CLICK ME</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="middle-second">
            <hr class="w-100 clearfix d-md-none">
            <h1 id="section-middle-second-header">Experience Optimization</h1>
            <hr class="w-100 clearfix d-md-none">
            <div class="ptext">

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