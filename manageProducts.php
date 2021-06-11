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
        button {
            background-color: grey;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button a {
         color: white;
        }
        button:hover {
            background-color: lightgrey;
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
		td{
			border: 1px solid #ccc;
			padding: 10px;
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
        
        <button><a href="addProducts.php">Add a new product</a></button>

        <br><br><br>
        <caption>List of Products</caption>
        <?php $query = "SELECT * FROM prod_tb ORDER BY prod_name, prod_category"; ?>

        <table border="1px;"> 
        <tr> 
            <td> ID </td> 
            <td> Product Name </td> 
            <td> Size </td> 
            <td> Brand </td> 
            <td> Category </td> 
            <td> Gender </td> 
            <td> Year </td>
            <td> Price </td> 
            <td> Discount </td>  
            <td> Availability </td> 
            <td> Image </td>
            <td> Audit Log</td>
            <td> Update </td> 
            <td> Delete </td> 
        </tr>   
        
        <?php
        if ($result = $conn->query($query)) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                $e1 = $row["prod_pk"];
                $e2 = $row["prod_name"];
                $e3 = $row["prod_s35"];
                $e4 = $row["prod_s36"];
                $e5 = $row["prod_s37"];
                $e6 = $row["prod_s38"];
                $e7 = $row["prod_s39"];
                $e8 = $row["prod_s40"];
                $e9 = $row["prod_s41"];
                $e10 = $row["prod_s42"];
                $e11 = $row["prod_s43"];
                $e12 = $row["prod_s44"];
                $e13 = $row["prod_s45"];
                $e14 = $row["prod_brand"];
                $e15 = $row["prod_category"];
                $e16 = $row["prod_gender"];
                $e17 = $row["prod_year"];
                $e18 = $row["prod_price"];
                $e19 = $row["prod_discount"];
                $e20 = $row["prod_availability"];
                $e21 = $row['prod_image'];
                $e22 = $row["prod_audit"];
                $e23 = $row["prod_timestamp"];
        ?>
                <tr> 
                    <td><?php echo $e1; ?></td> 
                    <td><?php echo $e2; ?></td> 
                    <td><?php echo convertSize($e3, $e4, $e5, $e6, $e7, $e8, $e9, $e10, $e11, $e12, $e13); ?></td> 
                    <td><?php echo $e14; ?></td>
                    <td><?php echo $e15; ?></td> 
                    <td><?php echo $e16; ?></td>
                    <td><?php echo $e17; ?></td> 
                    <td><?php echo $e18; ?></td>
                    <td><?php echo $e19; ?></td> 
                    <td><?php echo $e20; ?></td>
                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($e21); ?>" style="width: 120px; height: 80px"/> </td>
                    <!--
                    <td><button onclick="popup()">View</button></td>-->
                    <td><?php echo $e22; echo " @ "; echo $e23; ?></td>
                    <td><a href="updateProducts.php?id=<?php echo $e1; ?>">Update</a></td>
                    <td><a href="deleteProductsScript.php?id=<?php echo $e1; ?>">Delete</a></td>
                </tr>
        <?php
            }  
            $result->free();
        }
        ?>
        </table> 
                   
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    
    <script src="scripts.js">
        function popup() {
            var myWindow = window.open("", "_self", "width=200,height=100");
            myWindow.document.write("<p>This is 'MsgWindow'. I am 200px wide and 100px tall!</p>");

        }
    </script>
    
</body>

</html>