<?php
    include('db_config.php');
    include('debug.php');

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn){ // Check connection
        die("\r\n An error occured! Reason: ".mysqli_connect_error().". Please contact admin for support.");
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM prod_tb WHERE prod_pk = $id";
        if($conn->query($sql)===TRUE) {
            phpAlertRedirect("Product Deleted!", "manageProducts.php");
        } else {
            phpAlertRedirect("Error deleting record", "manageProducts.php");
        }
    }

    $conn->close();
?>  