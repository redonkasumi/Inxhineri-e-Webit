<?php
require_once('php/contactUsCrud.php');
$dhenat=new ContactUs();
$all=$dhenat->lexoDhenat();

$dhena = new ContactUs();

if(isset($_GET['ID'])){
$myID=$_GET['ID'];
$dhena->deleteDhenat($myID);
}

?>
<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" href ="css/adminUserPage.css" />
            <title>Shfaq dhenat</title>
        </head>
    <body>
            <table>
            <hr>
            <p>Lista e mesazheve:</p>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Messages</th>
                <th>Action</th>
            </tr>
            <tr>
<?php
foreach($all as $key=>$value){

?>
                <td><?php echo $value['username']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['message']?></td>
                
                <td id='de'><a href='contactUsDeleteMessages.php?ID=<?php echo $value['ID']?>'><button id="d">DELETE</button></a>


                </td>

            </tr>
<?php
}
?>
</table>
</div>
</body>
</html>