<?php
require_once('php/user.php');
$dhenat= new User();
$myId=$_GET['ID'];
$record=$dhenat->lexoDhenatSipasIDs($myId);

        if (isset($_POST['edit'])){
            if ($myId==$dhenat->getId()){
                $dhenat->setEmri($_POST['name']);
                $dhenat->setEmail($_POST['email']);
                $dhenat->setGender($_POST['gender']);
                $dhenat->setUserType($_POST['usertype']);
                    echo $dhenat->updateDhenat();
echo
"<script>
alert('te dhenat jane perditsuar me sukses');
document.location='userListAdmin.php'
</script>";
}
}
?>

<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
            <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
            <h3>Perditso te dhenat ne Formular</h3>
        <form action='' method="POST">
            <label>Emri</label>
                <input type="text" class="inp" name='name' value ='<?php echo $record['name'];?> '/>
            <label>Email</label>
            <input type="text" class="inp" name='email' value ='<?php echo $record['email'];?> '/>
            <label>Gender</label>
            <input type="text" class="inp" name='gender' value ='<?php echo $record['gender'];?> '/>
            <label>User Type</label>
            <input type="text" class="inp" name='usertype' value ='<?php echo $record['usertype'];?>'/>
                <button name='edit'>RUAJ</button>
        </form>
        </div>
    </body>
</htm>