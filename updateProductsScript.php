<?php
    include('db_config.php');
    include('debug.php');

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn){ // Check connection
        die("\r\n An error occured! Reason: ".mysqli_connect_error().". Please contact admin for support.");
    }

    //here session2
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
        //here

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "DELETE FROM prod_tb WHERE prod_pk = $id";

        $sql = "UPDATE prod_tb 
            SET 
            prod_name = '".$_POST['prod_name']."',
            prod_s35 = '".$_POST['prod_s35']."',
            prod_s36 = '".$_POST['prod_s36']."',
            prod_s37 = '".$_POST['prod_s37']."',
            prod_s38 = '".$_POST['prod_s38']."',
            prod_s39 = '".$_POST['prod_s39']."',
            prod_s40 = '".$_POST['prod_40']."',
            prod_s41 = '".$_POST['prod_41']."',
            prod_s42 = '".$_POST['prod_42']."',
            prod_s43 = '".$_POST['prod_43']."',
            prod_s44 = '".$_POST['prod_44']."',
            prod_s45 = '".$_POST['prod_45']."',
            prod_brand = '".$_POST['prod_brand']."',
            prod_category = '".$_POST['prod_category']."',
            prod_gender = '".$_POST['prod_gender']."',
            prod_year = '".$_POST['prod_year']."',
            prod_price = '".$_POST['prod_price']."',
            prod_discount = '".$_POST['prod_discount']."',
            prod_availability = '".$_POST['prod_availability']."',
            prod_audit = '".$_POST['prod_audit']."',
            prod_availability = '".$_POST['prod_availability']."'
            WHERE prod_pk = $id ";

        if($conn->query($sql)===TRUE) {
            phpAlertRedirect("Product Deleted!", "manageProducts.php");
        } else {
            phpAlertRedirect("Error deleting record", "manageProducts.php");
        }
    }

        // Get file info 
        $fileName = basename($_FILES["prod_image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

        // Allow certain file formats 
        $allowTypes = array('jpg','png','.png','jpeg','gif'); 

        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['prod_image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            //$insert = $db->query("INSERT into images (image, uploaded) VALUES ('$imgContent', NOW())"); 
            
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
            /*
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  */
        }
        else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            phpAlert($statusMsg);
        } 
        $conn->close();
?>