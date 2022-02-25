<?php
require_once('php/contactUsCrud.php');
$dhena = new ContactUs();

if(isset($_GET['ID'])){
$myID=$_GET['ID'];
$dhena->deleteDhenat($myID);
}
?>