<?php
session_start();
?>
<html lang="en">
    <meta charset="UTF-8">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="index.css">

        <title>Videos</title>
    </head>

    <body>
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

        <!-- Video Column Container-->

        <div class="video-container">
            <div class="video-header">
                <span>
                    <span class="previous" style="float:left";>
                        <i class="fas fa-arrow-circle-left"></i>
                        Previous Lesson
                    </span>
                    <span class="next" style="float:right";>
                        Next Lesson
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                </span>    
            </div>

            <!-- MENU -->
            <div class="video-menu">
                <div id="sidebar">
                    <nav>
                        <h3>Clicker Setup</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li id="video1" ><i class="fas fa-play-circle"></i>1. Introduction (3:50)</li>
                            <li 
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    echo 'data-toggle="modal" data-target="#myModal"';
                                }
                                else
                                {
                                    echo 'id="video2"';
                                }
                                ?>
                                ><i class="fas fa-play-circle"></i>2. Clicker Setup (2:43)</li>
                            <li 
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    echo 'data-toggle="modal" data-target="#purchaseModal"';
                                }
                                else
                                {
                                    if($_SESSION['pb'] == 1)
                                    {
                                        echo 'id="video3"';
                                    }
                                }
                                ?>
                                ><i class="fas fa-play-circle"></i>3. Using the Clicker (4:45)</li>
                            <li 
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    echo 'data-toggle="modal" data-target="#purchaseModal"';
                                }
                                else
                                {
                                    if($_SESSION['pb'] == 1)
                                    {
                                        echo 'id="video4"';
                                    }
                                }
                                ?>
                                ><i class="fas fa-play-circle"></i>4. Using the Clicker II (4:32)</li>
                            <li 
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    echo 'data-toggle="modal" data-target="#purchaseModal"';
                                }
                                else
                                {
                                    if($_SESSION['pb'] == 1)
                                    {
                                        echo 'id="video5"';
                                    }
                                }
                                ?>
                                ><i class="fas fa-play-circle"></i>5. The End (0:42)</li>
                        </ul>
                        <h3>Languages</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li><i class="fas fa-play-circle"></i>6. Java (3:50)</li>
                            <li data-toggle="modal" data-target="#myModal"><i class="fas fa-play-circle"></i>7. C++ (2:43)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>8. Python (4:45)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>9. C (4:32)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>10. The End (0:42)</li>
                        </ul>

                        <h3>Data Types</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li><i class="fas fa-play-circle"></i>11. Integers (3:50)</li>
                            <li data-toggle="modal" data-target="#myModal"><i class="fas fa-play-circle"></i>12. Boolean (2:43)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>13. Float/Double (4:45)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>14. String (4:32)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>15. Quiz (0:42)</li>
                        </ul>

                        <h3>Advanced Topics</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li><i class="fas fa-play-circle"></i>16. Inheritance (3:50)</li>
                            <li data-toggle="modal" data-target="#myModal"><i class="fas fa-play-circle"></i>17. Polymorphism (2:43)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>18. Classes (4:45)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>19. Objects (4:32)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>20. Constructors (0:42)</li>
                        </ul>

                        <h3>Smashers</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li><i class="fas fa-play-circle"></i>21. Westballz (3:50)</li>
                            <li data-toggle="modal" data-target="#myModal"><i class="fas fa-play-circle"></i>22. Mew2King (2:43)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>23. Mang0 (4:45)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>24. Hungrybox (4:32)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>25. Armada (0:42)</li>
                        </ul>

                        <h3>Teachers</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li><i class="fas fa-play-circle"></i>26. Alan Riggins (3:50)</li>
                            <li data-toggle="modal" data-target="#myModal"><i class="fas fa-play-circle"></i>27. Steve Price (2:43)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>28. Ivan Bajic (4:45)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>29. Wei Wang (4:32)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>30. Guy Leonard (0:42)</li>
                        </ul>

                        <h3>Sorting Algorithms</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li><i class="fas fa-play-circle"></i>31. Bubble Sort (3:50)</li>
                            <li data-toggle="modal" data-target="#myModal"><i class="fas fa-play-circle"></i>32. Merge Sort (2:43)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>33. Quick Sort (4:45)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>34. Heap Sort (4:32)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>35. The End (0:42)</li>
                        </ul>

                        <h3>Data Structures</h3>
                        <ul class="nav nav-divider nav-stacked">
                            <li><i class="fas fa-play-circle"></i>36. Stacks/Queues (3:50)</li>
                            <li data-toggle="modal" data-target="#myModal"><i class="fas fa-play-circle"></i>37. Hashtable (2:43)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>38. Binary Search Tree (4:45)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>39. Linked Lists (4:32)</li>
                            <li data-toggle="modal" data-target="#purchaseModal"><i class="fas fa-play-circle"></i>40. Final Project (0:42)</li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="video">
                <iframe id="current-video" width="560" height="315" src="https://www.youtube.com/embed/tQx4lutEhok?rel=0&amp&load_iv_policy=3;controls=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <!--
<div class="video-footer">

</div>
-->
        </div>

        <!-- Create an account form -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" id="unavailable-message">
                        <h5 class="modal-title text-center"><i class="fas fa-lock"></i>
                            Lecture Content is Unavailable.</h5>
                    </div>
                    <div class="modal-body video-login">
                        <div class="text-center">
                            <a href="signup.php"><button type="button" class="btn btn-primary">Register Now to Unlock</button></a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">X</button>
                            <p>If you already have an account, <a href="login.php">sign in here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Purchase tutorial form -->
        <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" id="unavailable-message">
                        <h5 class="modal-title text-center"><i class="fas fa-lock"></i>
                            Lecture Content is Unavailable.</h5>
                    </div>
                    <div class="modal-body video-login">
                        <div class="text-center">
                            <a href="checkout.php"><button type="button" class="btn btn-primary">Purchase Now to Unlock</button></a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="footer">
            <?php  
            include 'footer.php';
            ?>
        </section>

        <script type="application/javascript" src="javascript/videos.js"></script>
    </body>
</html>