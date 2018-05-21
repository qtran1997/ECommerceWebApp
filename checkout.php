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
        <title>Checkout!</title>
    </head>

    <body>

        <div class="nav-wrapper">
            <?php  
            include 'navloggedout.php';
            ?>
        </div>

        <div class="grid">
            <div class="bundle">
                <h4>Bundle Package</h4>
                <div class="bundle-info">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="Images/card.png" alt="">
                            <img src="Images/expiration.png" alt="">
                            <img src="Images/cvv.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="Images/card.png" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 1</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>TOTAL: $99.99</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="Images/expiration.png" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 2</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>TOTAL: ---</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="Images/cvv.jpg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>Step 3</h5>
                        </div>
                        <div class="col-lg-4">
                            <h5>TOTAL: ---</h5>
                        </div>
                    </div>


                </div>

                <!--                <h5>TOTAL: $99.99</h5>-->
            </div>
            <div class="billing">
                <h4>Billing Information:</h4>
                <div class="billing-info">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" required placeholder="Credit Card Number">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <img src="Images/card.png" alt="">
                                <img src="Images/expiration.png" alt="">
                                <img src="Images/cvv.jpg" alt="">
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <input type="password" required placeholder="CVC">
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <input type="text" required placeholder="Month">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <input type="text" required placeholder="Year">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" required placeholder="Postal Code">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" required placeholder="Country">
                            </div>
                        </div>
                    </form>
                    <button>Checkout</button>
                </div>
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