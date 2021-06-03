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
    <title>Urban Shoes Online Shop | Women Shoes</title>
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
            height: 800px;
        }

        .container1 .shop {
            position: absolute;
            top: 58%;
            left: 53%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: black;
            color: whitesmoke;
            font-size: 16px;
            padding: 12px;
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
                    <h2>Women</h2>
                    <div class="container1">
                        <img src="images/Must-Have-Classic.png" alt="Women Home" width="100%">
                        <a href="maindashboard.php">
                            <button class="shop" onclick="filterSelection('female')">Shop Women's</button>
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
                        <div class="colSingleProduct female casual converse 2020">
                            <img src="ShoesList/Shoes/66.jpg">
                            <h4>CONVERSE Chuck 70 Ox Women's</h4>
                            <p class="price" price-value = "259" style="color: coral;">$279</p>
                            <p><s style="color:darkgray">$60.00</s>-20%</p>
                        </div>
                        <div class="colSingleProduct female casual vans 2021">
                            <img src="ShoesList/Shoes/64.jpg">
                            <h4>VANS Classic Slip On Women's</h4>
                            <p class="price" price-value = "259" style="color: coral;">$359</p>
                            <p><s style="color:darkgray">$50.00</s>-50%</p>
                        </div>
                        <div class="colSingleProduct female sport nike 2019">
                            <img src="ShoesList/Shoes/61.jpg">
                            <h4>Vans Old Skool Women's</h4>
                            <p class="price" price-value = "259" style="color: coral;">$259</p>
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
                        <div class="colSingleProduct men casual vans 2018">
                            <img src="ShoesList/Shoes/47.jpg">
                            <h4>adidas Originals NMD R1 'Japan' Womens</h4>
                            <p class="price" price-value = "259" style="color: coral;">$219</p>
                            <p><s style="color:darkgray">$100.00</s>-20%</p>
                        </div>
                        <div class="colSingleProduct men casual vans 2021">
                            <img src="ShoesList/Shoes/48.jpg">
                            <h4>ADIDAS ZX 1K Boost Women's</h4>
                            <p class="price" price-value = "259" style="color: coral;">$329</p>
                            <p><s style="color:darkgray">$50.00</s>-20%</p>
                        </div>

                        <div class="colSingleProduct men sport addidas 2021">
                            <img src="ShoesList/Shoes/49.jpg">
                            <h4>adidas Originals Stan Smith Women's</h4>
                            <p class="price" price-value = "259" style="color: coral;">$649</p>
                            <p><s style="color:darkgray">$50.00</s>-20%</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="colSingleProduct men casual vans 2018">
                            <img src="ShoesList/Shoes/50.jpg">
                            <h4>adidas Originals ZX 2K Boost Pure</h4>
                            <p class="price" price-value = "259" style="color: coral;">$219</p>
                            <p><s style="color:darkgray">$100.00</s>-20%</p>
                        </div>
                        <div class="colSingleProduct men casual vans 2021">
                            <img src="ShoesList/Shoes/51.jpg">
                            <h4>adidas Originals Ozweego Women's</h4>
                            <p class="price" price-value = "259" style="color: coral;">$329</p>
                            <p><s style="color:darkgray">$50.00</s>-20%</p>
                        </div>

                        <div class="colSingleProduct men sport addidas 2021">
                            <img src="ShoesList/Shoes/52.jpg">
                            <h4>adidas Ultraboost Slip-On DNA Women's</h4>
                            <p class="price" price-value = "259" style="color: coral;">$649</p>
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