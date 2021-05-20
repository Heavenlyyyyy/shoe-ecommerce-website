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

