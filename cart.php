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
    <title>Urban Shoes Online Shop | Urban Shoes MY</title>
    <link rel="shortcut icon" href="images/Logo.ico" />
    <style>
        <?php include('style.php'); ?>

        .cartpage{
            margin: 25px auto;
        }

        .carttable{
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        .cartrow{
            background-color: white;
        }

        .cartInfo{
            display:flex;
            flex-wrap:wrap;
        }

        .cartheader{
            text-align:left;
            padding:5px;
            background:black;
            color:white;
            font-weight:normal;
        }

        td{
            padding: 10px 5px;
        }

        td input{
            width:50px;
            height:30px;
            padding:5px;
        }

        td a{
            color:rgb(80,80,80);
            text-decoration:underline;
            font-size:14px;
            padding-left:15px;
            padding-top:15px;
        }

        td img{
            width:200px;
            height: 150px;
            margin-right: 10px;
        }

        .summary{
            display:flex;
            justify-content:flex-end;
        }

        .summary table{
            border-top: 3px solid black;
            width:100%;
            max-width:400px;
        }

        td:last-child{
            text-align:right;
        }

        th:last-child{
            text-align:right;
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

                <h2>CART</h2>
                    <div class="cartpage">
                        <table class="carttable">

                        <tr>
                            <th class = "cartheader">Product</th>
                            <th class = "cartheader">Quantity</th>
                            <th class = "cartheader">Subtotal</th>
                        </tr>
                <?php 
                    
                    $data = 0;
                    //$query = "SELECT * FROM prod_tb ORDER BY prod_name, prod_category WHERE prod_availability = $data"; 
                    $query = "SELECT * FROM cart_tb WHERE cart_user_pk = $retrieve_login_user_pk"; 
    
                    if ($result = $conn->query($query)) 
                    {
                        while ($row = $result->fetch_assoc()) 
                        {
                            $e1 = $row["cart_pk"];
                            $e2 = $row["cart_user_pk"];
                            $e3 = $row["cart_prod_pk"];
                            $e4 = $row["cart_quantity"];
                            $e5 = $row["cart_size"];

                            $query1 = "SELECT * FROM prod_tb WHERE prod_pk = $e3 LIMIT 1"; 
                            if ($result1 = $conn->query($query1)) 
                            {
                                while ($row1 = $result1->fetch_assoc()) 
                                {
                                    $f1 = $row1["prod_pk"];
                                    $f2 = $row1["prod_name"];
                                    $f14 = $row1["prod_brand"];
                                    $f15 = $row1["prod_category"];
                                    $f16 = $row1["prod_gender"];
                                    $f17 = $row1["prod_year"];
                                    $f18 = $row1["prod_price"];
                                    $f19 = $row1["prod_discount"];
                                    $f20 = $row1["prod_availability"];
                                    $f21 = $row1['prod_image'];

                                    $discount = convertToDiscount($f19);
                                    if($discount == 1){
                                        $discountedPrice = $f18;
                                        $displayDiscount = 0;
                                    }
                                    else{
                                        $discountedPrice = ($f18 * (100-$discount))*0.01;
                                        $displayDiscount = $discount;
                                    }

                    ?>
                            <tr class="cartrow">
                                <td>
                                    <div class="cartInfo">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($f21); ?>"/>
                                        <div>
                                            <p><?php echo $f2; ?></p>
                                            <small>Price: RM<?php echo number_format((float) $discountedPrice, 2, '.', ''); ?></small>
                                            <small>Size: <?php echo $e5; ?> Europe</small>
                                            </br>
                                            <a href ="removeProductFromCart.php?cart_pk=<?php echo $e1; ?>">Remove</a>
                                        </div>
                                    </div>
                                </td>
                                <td><input type = "number" value = "<?php echo $e4; ?>" readonly></td>
                                <?php $data += number_format((float) $discountedPrice, 2, '.', '') * $e4; ?>
                                <td>RM <?php echo number_format((float) $discountedPrice, 2, '.', '') * $e4; ?> </td>
                            </tr>

                        <?php
                                 }  
                                 $result1->free();
                             }

                            }  
                            $result->free();
                        }
                        ?>

                        </table>
                        <div class="summary">
                            <table>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>RM<?php echo number_format((float) $data, 2, '.', ''); ?></td>
                                </tr>
                                <tr>
                                    <td>Estimated Delivery & Handling</td>
                                    <td>RM10.00</td>
                                    <?php $data += 10; ?>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>RM<?php echo number_format((float) $data, 2, '.', ''); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
</body>

</html>