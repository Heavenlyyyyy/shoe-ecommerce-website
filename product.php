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
    
    <title>Urban Shoes Online Shop | Shop</title>
    <style>
        <?php include('style.php'); ?>
        /*--Product Page--*/
.small-container2{
    max-width: 1300px;
    margin : auto;
    padding-left: 25px;
    padding-right: 25px;
    box-shadow: 0 0 5px 0px rgba(0,0,0,0.1);
}

.row2{
    justify-content: space-between;
    margin: 10px auto 20px;
}
/* -- Single product details -- */

.singleProduct{
    margin-top: 30px;
    box-shadow: rgb(59, 119, 119);
}

.singleProduct .col2 img{
    padding:0;
}

.singleProduct .col2{
    padding:10px;
}
.singleProduct .col3{
    margin-bottom: 30px;
}

.singleProduct h4{
    margin: 20px 0;
    font-size: 22px;
    font-weight: bold;
}
.singleProduct select{
    display: block;
    padding: 10px;
    margin-top: 20px;
}

.singleProduct input{
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 20px;
    margin-right: 10px;
    border: 1px solid ;
}

.singleProduct h6{
    margin: 5px 0;
    font-size: 15px;
    font-weight:normal;
}
.cartBtn{
    display: inline-block;
    background: coral;
    color:#fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}
.cartBtn:hover{
    background: #7a4a4a;
}
/*--Size Chart--*/
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 300%;
  }
    
  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 10px;
  }
    
  tr:nth-child(even) {
      background-color: #dddddd;
  }

  /*--Delivery and Warranty Details  --*/
.Delivery-Warranty-Details{
    font-size: 12px;
    padding: 20px 0 5px;
    overflow: hidden;
}
.Delivery-Warranty-Details h4{
    color:black;
    margin-bottom: 5px;
}
.Delivery-Warranty-Details p{
    color:#8a8a8a;
    margin-bottom: 5px;
}
.D-W-col1{
   
    text-align: left;
    margin-left:50px;
}
.D-W-col2,.D-W-col3,.D-W-col4{
    
    text-align: left;
}

.container1{
    max-width: 2000px;
    margin:auto;
    padding-left: 0px;
    padding-right: 25px;
}

.colSingleProduct{
    flex-basis: 30%;
    padding: 0px;
    min-width: 200px;
    margin-bottom: 50px;
    box-shadow: 0 0 5px 0px rgba(0,0,0,0.1);
    transition: transform 0.5s;
}
.colSingleProduct img{
    width: 100%;
}

.colSingleProduct:hover{
    box-shadow: 0 0 5px 0px rgba(0,0,0,0.5);
}
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="wrapper hovercollapse">
        <?php include('navbar.php'); ?>
        <?php include('sidebar.php'); ?>
        <div class="maincontainer">
    
        <?php          
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM prod_tb WHERE prod_pk = $id";
                    $ses_sql = mysqli_query($conn, $query); 
                    $row = mysqli_fetch_assoc($ses_sql); 

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

                    $discount = convertToDiscount($e19);
                    if($discount == 1){
                        $discountedPrice = $e18;
                        $displayDiscount = 0;
                    }
                    else{
                        $discountedPrice = ($e18 * (100-$discount))*0.01;
                        $displayDiscount = $discount;
                    }

                    $e20 = $row["prod_availability"];
                    $e21 = $row['prod_image'];
                    }
            ?>

            </br>
            </br>
            <div class="small-container2 singleProduct">
                <div class="row row2">
                    <div class="col2">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($e21); ?>" width="450px"/>
                    </div>

                    <div class="col2">
                        <p><?php echo $e15; ?></p>
                        <h2><?php echo $e2; ?></h2>
                        <h4 style="color: coral;">$<?php echo number_format((float) $discountedPrice, 2, '.', ''); ?></h4>
                        <!--<h4><s style="color:darkgray">$50.00</s>-20%</h4>-->
                        <h4><s style="color:darkgray">$<?php echo $e18; ?></s><?php if($displayDiscount != 0) {echo "-"; echo $displayDiscount; echo "%";}?></p></h4>
                        
                        
                        <form action="addUserProductScript.php" method="post">
                            <input type="number" value="<?php echo $retrieve_login_user_pk; ?>" name="cart_user_pk" hidden>
                            <input type="text" value="<?php echo $e1; ?>" name="cart_prod_pk" hidden>
                            <select name="cart_size" required>
                                <option value="" selected disabled>Select Size (Europe)</option>
                                <?php if($e3 != 0){ ?>
                                    <option value="35" name="cart_size">35</option>
                                <?php } if($e4 != 0){ ?>
                                    <option value="36" name="cart_size">36</option>
                                <?php } if($e5 != 0){ ?>
                                    <option value="37" name="cart_size">37</option>
                                <?php } if($e6 != 0){ ?>
                                    <option value="38" name="cart_size">38</option>
                                <?php } if($e7 != 0){ ?>
                                    <option value="39" name="cart_size">39</option>
                                <?php } if($e8 != 0){ ?>
                                    <option value="40" name="cart_size">40</option>
                                <?php } if($e9 != 0){ ?>
                                    <option value="41" name="cart_size">41</option>
                                <?php } if($e10 != 0){ ?>
                                    <option value="42" name="cart_size">42</option>
                                <?php } if($e11 != 0){ ?>
                                    <option value="43" name="cart_size">43</option>
                                <?php } if($e12 != 0){ ?>
                                    <option value="44" name="cart_size">44</option>
                                <?php } if($e13 != 0){ ?>
                                    <option value="45" name="cart_size">45</option>
                                <?php }  ?>
                            </select>
                            </br>
                            <p>Quantity <input type="number" value="1" name="cart_quantity"></p>
                            <input type="submit" value="Add to Cart" name="submit"> 
                            <br>
                            <!--<a href="addUserProductScript.php" class="cartBtn">Add To Cart</a>-->
                        </form>
                    </div>

                    <div class="col3">
                        <h5>Delivery Option</h5>
                        <h6> <span style='font-size:20px;'>&#128666;</span>Standard Delivery</h6>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 - 7day(s)</p>
                        <div class="box">
                            <p><span style='font-size:20px;'>&#127379;</span>Enjoy free shipping promotion with </p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;minimum spend of $15.00</p>
                        </div>
                        </br>
                        <hr>
                        </br>
                        <h5>Return & Warranty</h5>
                        <h6><span style='font-size:30px;'>&#8635;</span>14 days return to seller</h6>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp; "Don't want item or it doesn't suit/fit me"</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return reason is not applicable, </p>
                        </br>
                        <h6><span style='font-size:20px;'>&#10060;</span>Warranty not available</h6>

                        </br>
                    </div>
                    
                </div>
            </div>
            </br>
            </br>

            <div class="small-container2">
                <div class="row row2">
                    <h3>Product Details</h3>
                </div>
                <div class="row row2">
                    <div class="col2">
                        <p>-Ready Stock</p>
                        <p>-Simple & Classic Design</p>
                        <p>-Good Quality & Comfortable</p>
                        </br>
                        <table>
                            <tr>Size Chart Table</tr>
                            </br>
                            <tr>
                                <th>Europe Size</th>
                                <th>Inches</th>
                                <th>Centimeters</th>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>9</td>
                                <td>22.86</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>9.35</td>
                                <td>23.75</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>9.375</td>
                                <td>23.83</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>9.625</td>
                                <td>24.45</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>9.875</td>
                                <td>25.10</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>10</td>
                                <td>25.40</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>10.125</td>
                                <td>25.72</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>10.25</td>
                                <td>26.04</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>10.5</td>
                                <td>26.67</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>10.75</td>
                                <td>27.31</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>11</td>
                                <td>27.94</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="small-container2" style="margin-top: 30px;">
                <div class="row row2">
                    <h2>Review</h2>
                </div>
                <div class="row row2">
                    <p>This product has no reviews</p>
                </div>
            </div>

            <div class="small-container1" style="margin-top: 50px;" >
                <div class="row row2">
                    <h2>Related Products</h2>
                    <p>View More</p>
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

            <div class="Delivery-Warranty-Details">
                <div class="container1">
                    <div class="row">
                        <div class="D-W-col1">
                            <h4><span style='font-size:20px;'>&#128095;</span>WIDE SELECTION</h4>
                            <p>We work with the best shoes brand</p>
                        </div>

                        <div class="D-W-col2">
                            <h4><span style='font-size:20px;'>&#128230;</span>AFFORDABLE DELIVERY</h4>
                            <p>We promise on providing the best delivery fee</p>
                        </div>


                        <div class="D-W-col3">
                            <h4><span style='font-size:20px;'>&#10067;</span>NEED HELP? CALL US +012 3456789</h4>
                            <p>Call us if you have any question (10am - 5pm)</p>
                        </div>

                        <div class="D-W-col4">
                            <h4><span style='font-size:20px;'>&#127941;</span>EXCELLENT CUSTOMER SERVICE</h4>
                            <p>We serve the best for our customer</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include('footer.php'); ?>
    
</body>

</html>