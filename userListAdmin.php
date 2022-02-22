<?php
require_once('php/user.php');
$dhenat=new User();
$all=$dhenat->lexoDhenat();

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
            <p>Lista e te dhenave:</p>
            <tr>
                <th>Emri</th>
                <th>Email</th>
                <th>Gjinia</th>
                <th>Lloji i userit</th>
                <th>Action</th>
            </tr>
            <tr>
<?php
foreach($all as $key=>$value){

?>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['email']?></td>
                <td><?=$value['gender']?></td>
                <td><?=$value['usertype']?></td>
                
                <td id='de'><a href='deleteUsersAdmin.php?ID=<?php echo $value['ID']?>'><button id="d">DELETE</button></a>

                <a href='updateUsersAdmin.php?ID=<?php echo $value['ID']?>'><button id='e'>EDIT</button></td></a>

                </td>

            </tr>
<?php
}
?>
</table>
</div>
</body>
</html>