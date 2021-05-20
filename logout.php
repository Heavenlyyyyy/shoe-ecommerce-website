
<?php
    if(!isset($_SESSION)){
        session_start();
     }

    include('session.php');
    $temp =  $login_session;
    phpAlertRedirect("Logged Out as $temp", "home.php");

    if(session_destroy()){ // Destroying All Sessions 
        // destroy after redirect
    }
?>