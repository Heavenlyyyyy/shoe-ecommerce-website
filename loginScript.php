<?php
 require_once('debug.php');
$status = '(loginScript): ';

if(!isset($_SESSION)):
    $status .= 'session not set ';
else:
    $status .= 'session is set ';
endif;

include('db_config.php');

$error = ''; // Variable To Store Error Message 
//error_reporting(0);

if (isset($_POST['submit'])) 
{ 
    if (empty($_POST['user_name']) || empty($_POST['user_pass'])) {
        $error = "Please enter login details!"; 
        echo $error;        
    }
    else
    {
        $get_username = $_POST['user_name']; 
        $get_password = $_POST['user_pass']; 
        
        $conn = mysqli_connect($servername, $username, $password, $db); 
        
        // check admin_tb
        $query = "SELECT admin_name, admin_pass FROM admin_tb WHERE admin_name=? AND admin_pass=? LIMIT 1"; 
        
        // To protect from MySQL injection  
        $stmt = $conn->prepare($query); 
        $stmt->bind_param("ss", $get_username, $get_password); 
        $stmt->execute(); 
        $stmt->bind_result($get_username, $get_password); 
        $stmt->store_result(); 
            
        // Determine if ADMIN
        if($stmt->fetch()) 
        { // Fetching the contents of the row 
            // Initializing Session 
            if(!isset($_SESSION)) {     
                session_start();
            }
            $_SESSION['logged_in'] = true; 
            $_SESSION['user_type'] = 'admin';
            $_SESSION['name'] = $get_username;
            $status .= '(admin)';
            phpAlertRedirect("Logged in as $get_username", "redirect.php");
        } 
        // Check user_tb
        else
        {
            $query = "SELECT user_name, user_pass FROM user_tb WHERE user_name=? AND user_pass=? LIMIT 1"; 
           
            // To protect from MySQL injection  
            $stmt = $conn->prepare($query); 
            $stmt->bind_param("ss", $get_username, $get_password); 
            $stmt->execute(); 
            $stmt->bind_result($get_username, $get_password); 
            $stmt->store_result(); 

            // Determine if USER
            if($stmt->fetch()) 
            { // Fetching the contents of the row 
                // Initializing Session 
                if(!isset($_SESSION)) {     
                    session_start();
                }
                $_SESSION['logged_in'] = true; 
                $_SESSION['user_type'] = 'user';
                $_SESSION['name'] = $get_username;
                $status .= '(user)';
                phpAlertRedirect("Logged in as $get_username", "redirect.php");
            } 
            else{
                $status .= '(guest)';
                phpAlertRedirect("Incorrect login details! Please try again.", "login.php");
            }
        }
        mysqli_close($conn); // Closing Connection 
    }
}
else
    $status .= '(guest)';
    
    // status check
    consoleLog($status);
?>
