<?php
    if(!isset($_SESSION) ){    
        session_start(); }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <title>Urban Shoes Online Shop | Urban Shoes MY</title>
        <link rel="shortcut icon" href="images/Logo.ico" />
        <link rel="stylesheet" href="blog.css">
    <style>
        <?php include 'style.php'; ?>
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="wrapper hovercollapse">
        <?php include('navbar.php'); ?>
        <?php include('sidebar.php'); ?>
        <div class="maincontainer">
            <div class="container">
                <div class="content">
                    <div class="blog">
                        <h1>Blogs</h1>
                        <hr class="latest">
                        <div class="contain">
                            <div class="list">
                                <img class="bimg" src="images/shoe1.jpg">
                                <p class="listw"><b>The Woman Shoe Trend 2021</b></p>
                                <p class="lista">Johnathan Royce, January 5, 2021</p>
                                <p class="listd">Whats the latest women's shoes trend right now? Learn it here!</p>
                                <a class="read" href="blog1.html">Read</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="list">
                                <img class="bimg" src="images2/main.jpg">
                                <p class="listw"><b>How to take care of your shoe</b></p>
                                <p class="lista">Joseph Davis, Feburary 15, 2021</p>
                                <p class="listd">Get basic advices on taking care of your favorite shoe.</p>
                                <a class="read" href="blog2.html">Read</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="list">
                                <img class="bimg" src="images3/title.jpg">
                                <p class="listw"><b>Top Nike shoe 2021</b></p>
                                <p class="lista">Jolyn William, March 25, 2021</p>
                                <p class="listd">List of top Nike's shoes avialable right now.</p>
                                <a class="read" href="blog3.html">Read</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <hr>
                        <br><br><h2>More comming soon!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>