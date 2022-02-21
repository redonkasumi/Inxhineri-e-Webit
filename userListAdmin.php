<?php
require_once('php/user.php');
$dhenat=new User();
$all=$dhenat->lexoDhenat();
?>
<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" href ="css/displayStyle.css" />
            <title>Shfaq dhenat</title>
        </head>
    <body>
        <div id="a1">
            <header>
                <h3>Ju lutem shtype per te regjistruar te dhenat ne Sistem</h3>
                <a href="insert.php"><Button id='r'>Regjistrohu</Button></a>
            </header>
            <table>
            <hr>
            <p>Lista e te dhenave:</p>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Departamenti</th>
                <th>Adresa</th>
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

                <td id='de'><a href='deleteUsersAdmin.php?id=<?php echo $value['id']?>'><button id='d'>DELETE</button></a>

            </tr>
<?php
}
?>
</table>
</div>
</body>
</html>