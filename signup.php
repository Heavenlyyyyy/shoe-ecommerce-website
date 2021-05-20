<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    <title>Urban Shoes Online Shop | Account Register</title>
    <style>
        <?php include 'styles.css'; ?>
        .title {
            margin-left: 35px;
        }

        .link {
            margin-left: 5px;
            color: grey;
            font-weight: bold;
        }

        .form {
            background-color: black;
            width: 500px;
            padding: 25px;
            margin-left: 20px;
        }

        input[type=text],
        input[type=password],
        input[type=email],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            display: inline-block;
            border: none;
            background: whitesmoke;
        }

        .button {
            background-color: white;
            color: black;
            padding: 10px 10px;
            margin: 5px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .maincontainer .login {
            margin-top: -20px;
            margin-left: 35px;
        }

        .content{
            background-image: url('images/signup_background.gif');
            background-repeat: no-repeat;
            background-position: right;
            background-size: 40% 65%;
            background-color: black;
        }

        .title{
            color: white;
        }

        h2, .title{
            padding-top: 18px;
        }

        p, .title{
            padding-top: -10px;
            padding-bottom: 10px;
        }

        label{
            color: white;
        }

        .login{
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

                    <!--CONTENT: -->
                    <h2 class="title"> Sign Up </h2>
                    <p class="title"> Create your account.</p>
                    <form class="form" action="signUpScript.php" method="POST">
                        <label for="name">Username</label>
                        <input type="text" placeholder="Enter username here" name="user_name" required><br>

                        <label for="gender">Gender</label>
                        <select name="user_gender" required>
                            <option value="" disabled selected>Select gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select><br>

                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter Email here" name="user_email" required><br>

                        <label for="psw">Password</label>
                        <input type="password" placeholder="Enter Password here" name="user_pass0" required><br>

                        <label for="psw2">Please re-enter your password</label>
                        <input type="password" placeholder="Repeat Password again" name="user_pass" required><br>

                        <label>
                            <input type="checkbox" name="tnc" required> I have read and agree to the <a href="t&c.html"
                                style="color: rgb(120,120,120);">Terms & Conditions</a>.
                        </label><br><br>

                        <button class="button signupbtn" type="submit" name="submit" >Sign Up</button><br><br>
                    </form>

                    <p class="login">Already have an account?<a class="link" href="login.php">Login here!</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>