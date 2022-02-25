<header>
        <div class="navigation">
            <nav>
                <div class="header-text">
                    <span class="composition-text">
                        Travel
                    </span>

                    <span class="left-text">
                        Dare to live outside your box!
                    </span>
                </div>
                <i class="fa fa-bars menu-toggle"></i>
                <ul>
                    <li><a href="indexAdmin.php">HOME</a></li>
                    <li><a href="about.php" target="_self">ABOUT</a></li>
                    <li><a href="blog.php" target="_self">BLOG</a></li>
                    <li><a href="destination.php" target="_self">DESTINATIONS</a></li>
                    <li><a href="contactUs.php" target="_self">CONTACT US</a></li>
                    <li><a href="loginPage.php?logout=1"><b>LOGOUT</b><a></button></li>
	                <?php
	                if(isset($_GET['logout'])){
	                session_unset();
                	session_destroy();
	                }
                        ?>

                </ul>
            </nav>
        </div>
    </header>