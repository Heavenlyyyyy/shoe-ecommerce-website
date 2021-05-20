<?php
    require_once('debug.php');
    $status = '(session): ';

    if(!isset($_SESSION)):
        $status .= 'session not set ';
    else:
        $status .= 'session is set ';
    endif;

    include('db_config.php');
    $conn = mysqli_connect($servername, $username, $password, $db); 

   /* // this part commented as we're outputting consoleLog() for debugging purposes
    if(!isset($_SESSION) ){     
        session_start();    }
       */
       // $user_check = $_SESSION['name'];
        if(!isset($_SESSION['user_type'])){
            // do nothing as it is guest
            $status .= '(guest)';
        }
        // ADMIN
        elseif($_SESSION['user_type'] == 'admin'){
            $status .= '(admin)';
            $user_check = $_SESSION['name']; 
            $query = "SELECT * FROM admin_tb WHERE admin_name = '$user_check'"; 
            
            $ses_sql = mysqli_query($conn, $query); 
            $row = mysqli_fetch_assoc($ses_sql); 

            $login_session = $row['admin_name'];

            $retrieve_login_user_pk = $row['admin_pk'];
            $retrieve_admin_email = $row['admin_email'];
            $retrieve_admin_name = $row['admin_name'];
            $retrieve_admin_password = $row['admin_pass'];
            $retrieve_admin_timestamp = $row['admin_timestamp'];
            $retrieve_admin_audit = $row['admin_audit'];
        }
        elseif($_SESSION['user_type'] == 'user'){
            $status .= '(user)';
            $user_check = $_SESSION['name']; 
            $query = "SELECT * FROM user_tb WHERE user_name = '$user_check'"; 

            $ses_sql = mysqli_query($conn, $query); 
            $row = mysqli_fetch_assoc($ses_sql); 

            $login_session = $row['user_name'];

            $retrieve_login_user_pk = $row['user_pk'];
            $retrieve_user_name = $row['user_name'];
            $retrieve_user_password = $row['user_pass'];
            $retrieve_user_email = $row['user_email'];
            $retrieve_user_gender = $row['user_gender'];
            $retrieve_user_timestamp = $row['user_timestamp'];
        }
        
     // status check
     consoleLog($status);
?>