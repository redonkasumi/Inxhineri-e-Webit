
<?php

$host = "localhost:3306";
$user = "root";
$password = "";
$db = "projektiweb";



$data = mysqli_connect($host, $user, $password, $db);


if ($data === false) {
	die("connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];


	$sql = "select * from user where name='".$username."' AND password='".$password."' ";

	$result = mysqli_query($data, $sql);

	$row = mysqli_fetch_array($result);

	if(isset($row["username"])){

	if ($row["username"] != "username") {

		echo '<script>alert("Username not valid")</script>';
		
	}
	elseif($row["password"] != "password")
	{

		echo '<script>alert("Password incorrect")</script>';
	}
}
}

?>