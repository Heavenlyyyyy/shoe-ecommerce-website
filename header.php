<?php
    include('session.php');
    
    // If SESSION not Started => Guest
    if(!isset($_SESSION['user_type'])): ?>
    <header>
        <div>
            <nav aria-label="Header Nav">
                <a href="blog.php">Blog</a>
                &nbsp;
                &nbsp;
                <a href="login.php">Sign in</a>
            </nav>
        </div>
    </header>

<?php
    else: 
?>      
        <?php // Admin
            if($_SESSION['user_type'] == 'admin'): ?>
            <header>
                <div>
                    <nav aria-label="Header Nav">
                        <a style="color:black;">Welcome, <b><?php echo $login_session; ?></b> (Admin)</a>
                        &nbsp;
                        &nbsp;
                        <a href="blog.php">Blog</a>
                        &nbsp;
                        &nbsp;
                        <a href="manageProducts.php">Manage Products</a>
                        &nbsp;
                        &nbsp;
                        <a href="logout.php">Logout</a>
                    </nav>
                </div>
            </header>

        <?php // User/Member 
            elseif($_SESSION['user_type'] == 'user'): ?>
            <header>
                <div>
                    <nav aria-label="Header Nav">
                        <a style="color:black;">Welcome, <b><?php echo $login_session; ?></b> (User)</a>
                        &nbsp;
                        &nbsp;
                        <a href="blog.php">Blog</a>
                        &nbsp;
                        &nbsp;
                        <a href="logout.php">Logout</a>
                    </nav>
                </div>
            </header>

        <?php endif; ?> 

    <?php endif; ?> 