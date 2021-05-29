<?php
    include('db_config.php');
    include('debug.php');
    include('session.php');

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn){ // Check connection
        die("\r\n An error occured! Reason: ".mysqli_connect_error().". Please contact admin for support.");
    }

    if(isset($_GET['cart_pk'])) {
        $id = $_GET['cart_pk'];

        $sql = "DELETE FROM cart_tb WHERE cart_pk = $id";
        if($conn->query($sql)===TRUE) {
            phpAlertRedirect("Product Removed from Cart!", "cart.php");
        } else {
            phpAlertRedirect("Error removing product from cart", "cart.php");
        }
    }

    $conn->close();
?>  