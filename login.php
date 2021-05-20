<?php
if(!isset($_SESSION) ){     
    session_start();    }

    include('loginScript.php'); 
    /*
    if(isset($_SESSION['logged_in'])){
       header("location: maindashboard.php"); 
    }    
    else if(isset($_SESSION['logged_in'])){
       header("location: user_page.php");
    }
    */
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    <title>Urban Shoes Online Shop | Account Login</title>
    <style>
        <?php include 'styles.css'; ?>
        .title {
            margin-left: 35px;
        }

        .link {
            margin-left: 5px;
            color: lightgrey;
            font-weight: bold;
        }

        .form {
            background-color: white;
            padding: 25px;
            margin: 20px;
            margin-left: 350px;
            margin-right: 350px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            display: inline-block; 
            border: none;
            background: whitesmoke;
        }

        .button {
            background-color: black;
            color: white;
            padding: 10px 10px;
            margin: 15px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .register {
            margin-top: -20px;
            margin-left: 35px;
        }

        .content{
            background-image: url('images/login_background.gif');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 220%;
        }

        .title{
            color: white;
        }

        h1{
            padding-top: 10px;
        }

        .register{
            color: white;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
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
                    <!--CONTENT: Login-->
                    <h1 class="title"> Login </h1>
                    <p class="title"> Welcome! Please Login.</p>

                    <form action="" method="post" class="form">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Enter Username here" name="user_name" required><br>

                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter Password here" name="user_pass" required><br>

                        <!--
                        <label>
                            <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
                        </label><br>
                        -->

                        <button class="button" type="submit" name="submit" class="signupbtn">Login</button><br>
                    </form>

                    <p class="register">New user? <a class="link" href="signup.php">Register here!</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>