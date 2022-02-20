<?php
    require_once('php/user.php');
    if (isset($_POST['save'])){
    $regj= new User();
    $regj->setEmri($_POST['emri']);
    $regj->setEmail($_POST['email']);
    $regj->setPassword($_POST['password']);
    $regj->setGender($_POST['gender']);
    $regj->setUserType($_POST['usertype']);
    $regj->insertoDhenat();
    }
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signUp.css">
    <script type="text/javascript" src="js/signUp.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

</head>

<body>
    <!-- HEADER -->
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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html" target="_self">ABOUT</a></li>
                    <li><a href="blog.html" target="_self">BLOG</a></li>

                    <li><a href="loginPage.php" target="_self">LOG IN</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <!-- //HEADER -->

    <!-- CONTENT -->
    <div class="content-form">
        <form action="" method="POST" id="myForm" name="myForm">
            <!-- onsubmit="return checkMatching(this)" -->
            <h2 class="form-title">Sign Up</h2>

            <div>
                <label>Email:</label>
                <input type="text" name="email" class="required" required>
            </div>
            <div>
                <label>Usertype:</label>
                <input type="text" name="usertype" class="required" required>
            </div>
            <div>
                <label>Username:</label>
                <input type="text" name="emri" class="required" required>
                <keygen name="key" autofocus form="myForm" keytype="rsa">
            </div>
            <div>
                <!-- Use regex for password validation -->
                <label>Password:</label>
                <input type="password" id="password" name="password"  
                    class="required" required>
                <span toggle="#password" class="fa fa=fw fa eye field-icon toggle-password"></span>
                <p style="font-size: 12px; text-align: left; padding-left: 1em; color: #ff442a;"> Your password must
                    contain 8-20 characters (at least one upper case letter, one lower case letter and one number).</p>
            </div>
            <!-- <div>
                <label>Confirm Password:</label>
                <input type="password" name="password2"
                    class="required" required>
            </div> -->
            <div>
                <label>Gender:</label>
                <div class="gender">
                    <label>M</label>
                    <input type="radio" name="gender" required value="M">
                    <label>F</label>
                    <input type="radio" name="gender" value="F">
                    <label> Other</label>
                    <input type="radio" name="gender" value="O">
                </div>
            </div>
            

            <!-- <div>
                <h6 style="margin-left: 0.8em; color: #A5C736;">If you're not a robot, please drag the android into the
                    box.</h6>

                <div id="notRobot" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)"
                    ondragover="return dragOver(event)"></div>

                

                <div id="notRobot2" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)"
                    ondragover="return dragOver(event)">
                    <img src="images/872px-Android_robot.svg.png" alt="Andorid logo" id="android" draggable="true"
                    ondragstart="return dragStart(event)" height="60px" /></div>

            </div> -->

            <!-- <input type="checkbox" name="terms" id="terms" style="margin: 0em 0 1.25em 0.4em;">
            <label style="font-size: small;">I Agree Terms &amp; Coditions!</label> -->

            <div>
                <button type="submit" name="save">Sign Up</button>
            </div>
            <p>Already have an account, <a href="logIn.html">Log In</a> </p>
        </form>
    </div>

    <!-- <script src="js/header.js"></script> -->
    <!-- <script src="js/newyork.js"></script> -->

</body>

</html>
