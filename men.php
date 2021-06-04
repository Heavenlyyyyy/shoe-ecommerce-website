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
    <title>Urban Shoes Online Shop | Men Shoes</title>
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
            top: 66%;
            left: 85%;
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
                    <h2>Men</h2>
                    <div class="container1">
                        <img src="images/MenHome.png" alt="Men Home" width="100%">
                        <a href="maindashboard.php">
                            <button class="shop">Shop Men's</button>
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
                    <div class="colSingleProduct men casual vans 2018">
                        <img src="ShoesList/Shoes/27.jpg">
                        <h4>VANS Era</h4>
                        <p class="price" price-value = "259" style="color: coral;">$219</p>
                        <p><s style="color:darkgray">$100.00</s>-20%</p>
                    </div>
                    <div class="colSingleProduct men casual vans 2021">
                        <img src="ShoesList/Shoes/29.jpg">
                        <h4>VANS ComfyCush Era</h4>
                        <p class="price" price-value = "259" style="color: coral;">$329</p>
                        <p><s style="color:darkgray">$50.00</s>-20%</p>
                    </div>

                    <div class="colSingleProduct men sport addidas 2021">
                        <img src="ShoesList/Shoes/9.jpg">
                        <h4>adidas Originals NMD_R1</h4>
                        <p class="price" price-value = "259" style="color: coral;">$649</p>
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
                        <img src="ShoesList/Shoes/17.jpg">
                        <h4>adidas InFlight X Ghosted.3 FG</h4>
                        <p class="price" price-value = "259" style="color: coral;">$389</p>
                        <p><s style="color:darkgray">$486</s>-20%</p>
                    </div>
                    <div class="colSingleProduct men casual vans 2021">
                        <img src="ShoesList/Shoes/22.jpg">
                        <h4>PUMA RS-X Focus</h4>
                        <p class="price" price-value = "259" style="color: coral;">$559</p>
                        <p><s style="color:darkgray">$699</s>-20%</p>
                    </div>

                    <div class="colSingleProduct men sport addidas 2021">
                        <img src="ShoesList/Shoes/24.jpg">
                        <h4>PUMA Adrenaline Future 6.1 FG</h4>
                        <p class="price" price-value = "259" style="color: coral;">$829</p>
                        <p><s style="color:darkgray">$1184</s>-30%</p>
                    </div>
                </div>
                <div class="row">
                    <div class="colSingleProduct men casual vans 2018">
                        <img src="ShoesList/Shoes/36.jpg">
                        <h4>VConverse All Star Ox Tie Dye</h4>
                        <p class="price" price-value = "259" style="color: coral;">$269</p>
                        <p><s style="color:darkgray">$448</s>-40%</p>
                    </div>
                    <div class="colSingleProduct men casual vans 2021">
                        <img src="ShoesList/Shoes/21.jpg">
                        <h4>PUMA RS-Fast</h4>
                        <p class="price" price-value = "259" style="color: coral;">$539</p>
                        <p><s style="color:darkgray">$1078</s>-50%</p>
                    </div>

                    <div class="colSingleProduct men sport addidas 2021">
                        <img src="ShoesList/Shoes/23.jpg">
                        <h4>PUMA Leadcat Slides</h4>
                        <p class="price" price-value = "259" style="color: coral;">$99</p>
                        <p><s style="color:darkgray">$124</s>-20%</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>