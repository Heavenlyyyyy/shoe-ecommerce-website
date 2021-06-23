<?php
    include('session.php');
?>
        <div class="topnavbar">
            <div class="logo">
                <a href="home.php"><img src="images/Logo.jpg" alt="logo" width="125px"></a>
            </div>
            <div class="menu">
                <div class="bar">
                    <img src="images/bars.png" alt="bars" width="50px">
                </div>

                <?php
                    // If SESSION not Started => Guest
                    if(!isset($_SESSION['user_type'])): ?>
                        <div class="category">
                            <!--Do not display Men Women Kids-->
                        </div>
                <?php
                    else: 
                ?>   
                    <?php // Admin
                        if($_SESSION['user_type'] == 'admin'): ?>
                            <div class="category">
                                <a href="men.php">MEN</a>
                                <a href="women.php">WOMEN</a>
                                <a href="kids.php">KIDS</a>
                            </div>
                    <?php // User/Member 
                        elseif($_SESSION['user_type'] == 'user'): ?>
                            <div class="category">
                                <a href="men.php">MEN</a>
                                <a href="women.php">WOMEN</a>
                                <a href="kids.php">KIDS</a>
                            </div>
                    <?php endif; ?> 
                <?php endif; ?> 

                <div class="searchwrapper">
                    <div class="wrap">
                        <form action="" class="search">
                            <input type="search" placeholder="Search" name="search">
                            <img src="images/search.png" alt="search" width="30px">
                        </form>
                        <div class="cart">
                            <a href="cart.php"><img src="images/cart.png" alt="cart" width="50px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
   

    
    
    
        
    