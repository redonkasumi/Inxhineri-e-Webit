<?php
require_once('php/user.php');
$dhena = new User();

if(isset($_GET['ID'])){
$myID=$_GET['ID'];
$dhena->deleteDhenat($myID);
}
?>