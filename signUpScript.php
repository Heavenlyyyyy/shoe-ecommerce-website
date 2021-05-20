<?php
    include('db_config.php');
    include('debug.php');

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn){ // Check connection
        die("\r\n An error occured! Reason: ".mysqli_connect_error().". Please contact admin for support.");
    }
            
        // Insert Data 
        $sql="INSERT INTO `user_tb`(`user_name`, `user_pass`, `user_email`, `user_gender`) VALUES ('$_POST[user_name]','$_POST[user_pass]','$_POST[user_email]','$_POST[user_gender]')";

        if($conn->query($sql)===TRUE){
            phpAlertRedirect("Sign Up Succesful!  LOGIN to browse our store now!", "login.php");
        }
        else{
            phpAlertRedirect("An error occured! Try again!", "signup.php");}
        $conn->close();
?>