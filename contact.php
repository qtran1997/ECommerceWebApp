<!DOCTYPE html>
<html lang="en">

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
    <title>Contact Us!</title>

    <body>

        <!-- NAVBAR -->
        <div class="wrapper">
            <?php  
            include 'navloggedout.php';
            ?>
        </div>

<!--
        <section class="contact-top">

        </section>
-->

        <section class="contact-content">
            <h2>Have any questions? We'd love to help!</h2>

            <div id="contact-left" class="card col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam saepe numquam harum illo laudantium omnis itaque similique provident minima magnam hic, voluptates neque expedita, nam eaque voluptatem qui. Amet porro ullam possimus voluptatibus voluptatum sit saepe cumque, esse eligendi repellat qui magni dicta nihil repudiandae, nulla, autem similique? Ipsam laboriosam ipsa delectus fuga quo quod blanditiis vel ratione architecto, ea omnis hic fugit, recusandae harum doloremque iure, illo magni quidem deserunt aliquid possimus. Dolorum unde corporis voluptas, error corrupti impedit velit vero deleniti asperiores! Praesentium cum sit, culpa reiciendis perferendis quibusdam est! Nostrum ducimus natus cumque fugit. Saepe perferendis adipisci cumque earum impedit magni qui! Doloribus quasi tempore dignissimos, ullam aspernatur velit odio voluptates facere, hic voluptate atque, quas, maiores. Rem, at praesentium sint ab quia dolorum exercitationem natus nulla.</p>
                </div>
            </div>

            <div id="contact-right" class="card col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card-body">
                    <form>
                        <div class="form-header">
                            First Name: 
                            <span class="star">*</span>
                        </div>
                        <input type="text" class="input-body" name="firstname" required>
                        <div class="form-header">
                            Last Name: 
                            <span class="star">*</span>
                        </div>
                        <input type="text" class="input-body" name="lastname" required>
                        <div class="form-header">
                            Email: 
                            <span class="star">*</span>
                        </div>
                        <input type="email" class="input-body" name="email" required>
                        <div class="form-header">
                            Phone: 
                            <span class="star">*</span>
                        </div>
                        <input type="text" class="input-body" name="phone" required>
                        <div class="form-header">
                            Message: 
                            <span class="star">*</span>
                        </div>
                        <textarea type="text" class="input-body" name="message" required></textarea>
                        <br>
                        <input type="submit" id="contact-send" value="SEND">
                        <br>
                        <br>
                        <h4>
                            <span class="star">*</span> Indicates required fields
                        </h4>
                    </form>
                </div>
            </div>
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