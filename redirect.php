<?php
    if(!isset($_SESSION) ){    
        session_start(); }

    include('session.php');

    if(!isset($_SESSION['alertMsg'])){
        // do nothing
    }
    else{
        echo '<script language="javascript">alert(" '.$_SESSION['alertMsg'].' ");</script>';
    }

    if(!isset($_SESSION['user_type'])){
        // dont do anything (Guest)
    }
    elseif($_SESSION['user_type'] == 'admin'){
        header("Location: maindashboard.php");
    }
    elseif($_SESSION['user_type'] == 'user'){
       
        if($retrieve_user_gender == 'M')
            header("Location: men.php");
        elseif($retrieve_user_gender == 'F')
            header("Location: women.php");
        else
            header("Location: men.php"); // default
    }
    else
        exit;
?>