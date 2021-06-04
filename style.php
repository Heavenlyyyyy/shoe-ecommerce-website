    <?php  
        if($_SESSION['user_type'] == 'user'){
            if($retrieve_user_gender == 'M'){
                include ('styles.css'); 
            }
            elseif($retrieve_user_gender == 'F'){
                include ('womanishStyles.css');
            }                
            else{
                include ('styles.css');           
            }
        }
        else
            include ('styles.css');      
    ?>