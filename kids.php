<?php
    include('session.php');
    if(!isset($_SESSION) ){     
        session_start(); }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    <title>Urban Shoes Online Shop | Kids Shoes</title>
    <style>
        <?php include 'styles.css'; ?>
        .content h2 {
            font-size: 26px;
            padding-bottom: 15px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .content .container1 {
            width: 100%;
        }

        .container1 img {
            width: 100%;
            height: 750px;
        }

        .container1 .shop {
            position: absolute;
            top: 92%;
            left: 91.5%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: black;
            color: whitesmoke;
            font-size: 16px;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .container1 .shop:hover {
            border: 1.5px solid white;
            background-color: rgb(50, 50, 50);
            color: white;
        }
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
                    <h2>Kids</h2>
                    <div class="container1">
                        <img src="images/kidHome.png" alt="Kids Home" width="100%">
                        <a href="maindashboard.php">
                            <button class="shop">Shop Kid's</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="small-container1" style="margin-top: 50px;" >
                <div class="row row2">
                    <h2 class ="title">Featuring Products</h2>
                </div>
            </div>

            <div class="small-container"style="margin-top: 40px;">
                <div class="row">
                    <div class="colSingleProduct kid sport nike 2021">
                        <img src="ShoesList/Shoes/75.jpg">
                        <h4>Jordan Air 6 Retro "Carmine" Children</h4>
                        <p class="price" price-value = "259" style="color: coral;">$299</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                    <div class="colSingleProduct kid slide addidas 2021">
                        <img src="ShoesList/Shoes/76.jpg">
                        <h4>ADIDAS Swim Sandals Infant</h4>
                        <p class="price" price-value = "259" style="color: coral;">$119</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>

                    <div class="colSingleProduct kid casual puma 2021">
                        <img src="ShoesList/Shoes/83.jpg">
                        <h4>PUMA Shuffle x Peanuts Junior</h4>
                        <p class="price" price-value = "259" style="color: coral;">$229</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                </div>
            </div>

            <div class="small-container1" style="margin-top: 50px;" >
                <div class="row row2">
                    <h2 class="title">Lastest Products</h2>
                </div>
            </div>

            <div class="small-container"style="margin-top: 40px;">
                <div class="row">
                    <div class="colSingleProduct kid casual puma 2021">
                        <img src="ShoesList/Shoes/77.jpg">
                        <h4>ADIDAS RapidaZen Infant</h4>
                        <p class="price" price-value = "259" style="color: coral;">$229</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                    <div class="colSingleProduct kid casual puma 2021">
                        <img src="ShoesList/Shoes/78.jpg">
                        <h4>adidas Originals Forum Low Junior</h4>
                        <p class="price" price-value = "259" style="color: coral;">$229</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                    <div class="colSingleProduct kid casual puma 2021">
                        <img src="ShoesList/Shoes/79.jpg">
                        <h4>adidas Tensaur Children</h4>
                        <p class="price" price-value = "259" style="color: coral;">$229</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                </div>
                <div class="row">
                    <div class="colSingleProduct kid casual puma 2021">
                        <img src="ShoesList/Shoes/85.jpg">
                        <h4>PUMA Carina Junior</h4>
                        <p class="price" price-value = "259" style="color: coral;">$229</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                    <div class="colSingleProduct kid casual puma 2021">
                        <img src="ShoesList/Shoes/86.jpg">
                        <h4>Vans Sk8-Hi Junior</h4>
                        <p class="price" price-value = "259" style="color: coral;">$229</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                    <div class="colSingleProduct kid casual puma 2021">
                        <img src="ShoesList/Shoes/87.jpg">
                        <h4>Vans Old Skool Junior</h4>
                        <p class="price" price-value = "259" style="color: coral;">$229</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>