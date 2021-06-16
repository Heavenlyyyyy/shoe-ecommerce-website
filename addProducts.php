<?php
    if(!isset($_SESSION) ){    
        session_start(); }

    include('session.php');
    require_once('debug.php');
    include('db_config.php');
    $conn = mysqli_connect($servername, $username, $password, $db); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    <title>(Admin) Manage Products</title>
    <style>
        <?php include 'styles.css'; ?>
        input[type=text],select{
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
		
		table {
			border-collapse: collapse;
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
		td, th {
			border: 1px solid #ccc;
			padding: 10px;
		}
		th:empty {
			border: 0;
		}

        button[type=submit]:hover {
            background-color: lightgrey;
        }

        button[type=submit] {
            background-color: grey;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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
        
        <caption>Add product</caption> <br><br>
        <form action="addProductsScript.php" method="post" enctype="multipart/form-data">
            <label for="prod_name">Product Name</label>
            <input type="text" placeholder="Enter product name here" name="prod_name" required><br>

            <table border="1px">
                <tr>
                    <td>Size</td>
                    <td>Yes</td>
                    <td>No</td>
                </tr>
                <tr>                          <!-- if not selected then use default 0-->
                    <td>35: </td>
                    <td><input type="radio" id="s35" name="prod_s35" value="1" required></td>
                    <td><input type="radio" id="s35" name="prod_s35" value="0" required></td>
                </tr>
                <tr>
                    <td>36: </td>
                    <td><input type="radio" id="s36" name="prod_s36" value="1" required></td>
                    <td><input type="radio" id="s36" name="prod_s36" value="0" required></td>
                </tr>
                <tr>
                    <td>37: </td>
                    <td><input type="radio" id="s37" name="prod_s37" value="1" required></td>
                    <td><input type="radio" id="s37" name="prod_s37" value="0" required></td>
                </tr>
                <tr>
                    <td>38: </td>
                    <td><input type="radio" id="s38" name="prod_s38" value="1" required></td>
                    <td><input type="radio" id="s38" name="prod_s38" value="0" required></td>
                </tr>
                <tr>
                    <td>39: </td>
                    <td><input type="radio" id="s39" name="prod_s39" value="1" required></td>
                    <td><input type="radio" id="s39" name="prod_s39" value="0" required></td>
                </tr>
                <tr>
                    <td>40: </td>
                    <td><input type="radio" id="s40" name="prod_s40" value="1" required></td>
                    <td><input type="radio" id="s40" name="prod_s40" value="0" required></td>
                </tr>
                <tr>
                    <td>41: </td>
                    <td><input type="radio" id="s41" name="prod_s41" value="1" required></td>
                    <td><input type="radio" id="s41" name="prod_s41" value="0" required></td>
                </tr>
                <tr>
                    <td>42: </td>
                    <td><input type="radio" id="s42" name="prod_s42" value="1" required></td>
                    <td><input type="radio" id="s42" name="prod_s42" value="0" required></td>
                </tr>
                <tr>
                    <td>43: </td>
                    <td><input type="radio" id="s43" name="prod_s43" value="1" required></td>
                    <td><input type="radio" id="s43" name="prod_s43" value="0" required></td>
                </tr>
                <tr>
                    <td>44: </td>
                    <td><input type="radio" id="s44" name="prod_s44" value="1" required></td>
                    <td><input type="radio" id="s44" name="prod_s44" value="0" required></td>
                </tr>
                <tr>
                    <td>45: </td>
                    <td><input type="radio" id="s45" name="prod_s45" value="1" required></td>
                    <td><input type="radio" id="s45" name="prod_s45" value="0" required></td>
                </tr>
            </table>

            <label for="prod_brand">Brand</label>
            <input type="text" placeholder="Enter brand here" name="prod_brand" required><br>
            
            <label for="prod_category">Category</label>
            <input type="text" placeholder="Enter category here" name="prod_category" required><br>
            
            <label for="prod_gender">Gender</label>
            <select name="prod_gender" required>
                <option value="" disabled selected>Select gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="K">Kids</option>
            </select><br>

            <label for="prod_year">Year</label>
            <input type="text" placeholder="Enter year here" name="prod_year" required>
            <br>
            
            <label for="prod_price">Price</label>
            <input type="text" placeholder="Enter price here" name="prod_price" required>
            <br>
            
            <label for="prod_discount">Discount</label>
            <input type="number" placeholder="Enter discount here" name="prod_discount" required>
            <br>

            <label for="prod_audit">Audit</label>
            <input type="text" name="prod_audit" value="<?php echo $retrieve_admin_audit; ?>" readonly>
            <br>

            <label for="prod_availability">Availability</label>
            <select name="prod_availability" required>
                <option value="" disabled selected>Select availability</option>
                <option value="1">Available</option>
                <option value="0">Unavailable</option>
            </select><br>

            <label for="prd_image">Select Image File:</label>
            <input type="file" name="prod_image" required>
            <br><br>

            <button type="submit" name="submit" >Add Product</button><br><br>
        </form>
                   
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>