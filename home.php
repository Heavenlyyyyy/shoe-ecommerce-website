<?php
    if(!isset($_SESSION) ){     
        session_start(); }

    include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    <title>Urban Shoes Online Shop | Urban Shoes MY</title>
    <style>
        <?php include('style.php'); ?>
        .content .container1 {
            width: 100%;
        }

        .container1 img {
            width: 100%;
            height: 800px;
        }

        .container1 .shop {
            position: absolute;
            top: 60%;
            left: 35%;
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
                    <div class="container1">
                        <img src="images/anniversary.png" alt="home" width="100%">
                        <a href="maindashboard.php">
                            <button class="shop">Shop Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>