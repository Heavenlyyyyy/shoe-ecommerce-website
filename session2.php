<?php

    include('db_config.php');
    include('debug.php');

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn){ // Check connection
        die("\r\n An error occured! Reason: ".mysqli_connect_error().". Please contact admin for support.");
    }

    $query = "SELECT * FROM prod_tb WHERE prod_pk = $id";
    $ses_sql = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($ses_sql); 

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM prod_tb WHERE prod_pk = $id";
        $ses_sql = mysqli_query($conn, $query); 
        $row = mysqli_fetch_assoc($ses_sql); 
        $retrieve_prod_name = $row['prod_name'];
        $retrieve_prod_s35 = $row['prod_s35'];
        $retrieve_prod_s36 = $row['prod_s36'];
        $retrieve_prod_s37 = $row['prod_s37'];
        $retrieve_prod_s38 = $row['prod_s38'];
        $retrieve_prod_s39 = $row['prod_s39'];
        $retrieve_prod_s40 = $row['prod_s40'];
        $retrieve_prod_s41 = $row['prod_s41'];
        $retrieve_prod_s42 = $row['prod_s42'];
        $retrieve_prod_s43 = $row['prod_s43'];
        $retrieve_prod_s44 = $row['prod_s44'];
        $retrieve_prod_s45 = $row['prod_s45'];
        $retrieve_prod_brand = $row['prod_brand'];
        $retrieve_prod_category = $row['prod_category'];
        $retrieve_prod_gender = $row['prod_gender'];
        $retrieve_prod_year = $row['prod_year'];
        $retrieve_prod_price = $row['prod_price'];
        $retrieve_prod_discount = $row['prod_discount'];
        $retrieve_prod_year = $row['prod_availability'];
    }

?>