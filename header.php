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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html" target="_self">ABOUT</a></li>
                    <li><a href="blog.html" target="_self">BLOG</a></li>
                    <li> <?php
                         
                          if(isset($_COOKIE["type4"] )){  
                             
                             echo("<a href='logout.php' target='_self' > LOG OUT");
                           }
                           else{
                               echo("<a href='loginPage.php' target='_self' > LOG IN");
                           }?></a></li>

                </ul>
            </nav>
        </div>
    </header>