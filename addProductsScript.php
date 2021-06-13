<?php
    include('db_config.php');
    include('debug.php');

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn){ // Check connection
        die("\r\n An error occured! Reason: ".mysqli_connect_error().". Please contact admin for support.");
    }
            
        // Get file info 
        $fileName = basename($_FILES["prod_image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

        // Allow certain file formats 
        $allowTypes = array('jpg','png','.png','jpeg','gif'); 

        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['prod_image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            $sql = "INSERT INTO `prod_tb`(`prod_name`, `prod_s35`, `prod_s36`, `prod_s37`, `prod_s38`, 
            `prod_s39`, `prod_s40`, `prod_s41`, `prod_s42`, `prod_s43`, `prod_s44`, `prod_s45`, `prod_brand`, 
            `prod_category`, `prod_gender`, `prod_year`, `prod_price`, `prod_discount`, `prod_availability`, 
            `prod_audit`, `prod_image`) 
            VALUES ('$_POST[prod_name]','$_POST[prod_s35]','$_POST[prod_s36]','$_POST[prod_s37]','$_POST[prod_s38]',
            '$_POST[prod_s39]','$_POST[prod_s40]','$_POST[prod_s41]','$_POST[prod_s42]','$_POST[prod_s43]','$_POST[prod_s44]','$_POST[prod_s45]','$_POST[prod_brand]',
            '$_POST[prod_category]','$_POST[prod_gender]','$_POST[prod_year]','$_POST[prod_price]','$_POST[prod_discount]','$_POST[prod_availability]',
            '$_POST[prod_audit]','$imgContent')";
           
            if($conn->query($sql)===TRUE){
                phpAlertRedirect("File uploaded successfully", "manageProducts.php");
            }
            else{

                phpAlert("File upload failed! Try again!");
            }

        }
        else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            phpAlert($statusMsg);
        } 
        $conn->close();
?>