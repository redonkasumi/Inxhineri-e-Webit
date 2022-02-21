<?php
require_once('php/user.php');
    $dhena = new User();
    if(isset($_GET['id'])){
    $myID=$_GET['id'];
    $dhena->deleteDhenat($myID);
}
?>