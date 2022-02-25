
<?php

$host="localhost:3306";
$user="root";
$password="";
$db="projektiweb";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from user where name='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;
		header("location:index.php");
	}
	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:indexAdmin.php");
	}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/logIn.css">
    <script src="js/login.js"></script>
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
                    <li><a class="login" href="loginPage.php" target="_self">LOG IN</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <!-- //HEADER -->

    <!-- CONTENT -->
    <div class="content-form">
        <form action="#" method="post"  onsubmit="return validate(this)">
            <h2 class="form-title">Log In</h2>
            <div>
                <label>Username:</label>
                <input type="text" name="username" class="inputType" required autofocus>

            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" class="inputType" required>
            </div>
            <div>
                <button type="submit" name="logIn-btn" class="logIn-btn">Log In</button>
            </div>
            <p>If you don't have an account, you can <a href="signUp.php">Sign Up</a> </p>

        </form>
        <br>
    </div>
</body>

</html>