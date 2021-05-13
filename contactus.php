<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    <title>Urban Shoes Online Shop | Contact Us</title>
    <style>
        <?php include 'styles.css'; ?>
        input[type=text],
        input[type=email],
        select,
        textarea {
            width: 100%;
            /* Full width */
            padding: 12px;
            /* Some padding */
            border: 1px solid #ccc;
            /* Gray border */
            border-radius: 4px;
            /* Rounded borders */
            box-sizing: border-box;
            /* Make sure that padding and width stays in place */
            margin-top: 6px;
            /* Add a top margin */
            margin-bottom: 16px;
            /* Bottom margin */
            resize: vertical
                /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: lightgrey;
        }

        input[type=submit] {
            background-color: grey;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .ContactInformation {
            border: 0.5px solid whitesmoke;
            padding: 10px;
        }

        .ContactInformation a {
            color: rgb(78, 113, 186);
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
                                        <div class="ContactInformation">
                        <h1> Contact Us </h1>

                        <p>
                            Our customer care teams are available to help you, you can contact us:
                            </br>
                        </p>

                        <p>
                            </br><strong>By email:</strong> </br> Feel free to send us email to
                            <em>customerservice@Urbanshoes.com</em> for enquiries.
                            </br> Please kindly give us the order reference number for order checking.
                        </p>

                        <p>
                            </br><strong>By phone:</strong> </br> Feel free to contact us via <em>03- 3141 5926</em> for
                            quick enquiries.
                            </br> Our customer service line are available for 10:00 a.m. to 1:00 p.m. and 5:00 p.m. to
                            9:00p.m. (every Monday to Saturday).
                        </p>
                        <p>
                            </br><strong> Our twitter: </strong><a href="http://www.twitter.com/Urbanshoes"
                                data-mce-href="http://www.twitter.com/Urbanshoes"> @Urbanshoes</a> </br>
                            <strong> Our facebook: </strong> <a href="http://www.facebook.com/Urbanshoes"
                                data-mce-href="http://www.facebook.com/Urbanshoes">Urbanshoes</a>

                        </p>
                    </div>

                    <div class="ContactForm">
                        <form action="" method="POST">
                            </br>
                            <label for="name">Full Name: </label>
                            <input type="text" id="name" name="name" placeholder="Enter full name here" required>

                            <label for="email">Email address: </label>
                            <input type="email" id="email" name=emailadd placeholder="Enter email here" maxlength="80"
                                required>

                            <label for="subject">Subject: </label>
                            <input type="text" id="subject" name="subject" placeholder="Enter subject here" required>

                            <label for="description">Description: </label>
                            <textarea id="description" name="description" cols=20 rows=5
                                placeholder="Write your message here... " required></textarea>

                            <label for="orderNo">Order Number: </label>
                            <input type="text" id="orderNo" maxlength="10" name="orderNo"
                                placholder="Enter order number here" title="orderNo" required>

                            <input type="submit" name="button" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>