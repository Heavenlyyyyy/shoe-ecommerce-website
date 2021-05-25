<?php
    include('db_config.php');
    include('debug.php');
    include('session.php');

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn){ // Check connection
        die("\r\n An error occured! Reason: ".mysqli_connect_error().". Please contact admin for support.");
    }
            
    $sql = "INSERT INTO `cart_tb`(`cart_user_pk`, `cart_prod_pk`, `cart_quantity`, `cart_size`) 
    VALUES ('$_POST[cart_user_pk]','$_POST[cart_prod_pk]','$_POST[cart_quantity]','$_POST[cart_size]')";

    if($conn->query($sql)===TRUE){
        phpAlertRedirect("Product Added to Cart", "cart.php");
    }
    else{
        phpAlert("Failed to add to cart! Try again!");
    }

    $conn->close();
?>