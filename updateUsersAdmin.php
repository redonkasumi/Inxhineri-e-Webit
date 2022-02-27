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
        <link rel="stylesheet" href ="css/updateUserAdmin.css" />
          <link rel="stylesheet" href="css/style.css">
            <title>Update Form</title>
    </head>
    <body>
        <div id="content-form">
        <form action='' method="POST">
            <h2 class="form-title">Update Data Form</h2>
            <div>
                 <label>Name: </label>
                 <input type="text" class="inp" name='name' value ='<?php echo $record['name'];?> '/>
            </div>
            
            <div>
                 <label>Email: </label>
                 <input type="text" class="inp" name='email' value ='<?php echo $record['email'];?> '/>
            </div>
            
            <div>
                <label>Gender: </label>
                <input type="text" class="inp" name='gender' value ='<?php echo $record['gender'];?> '/>
            </div>
            
            <div>
                <label>User Type: </label>
                <input type="text" class="inp" name='usertype' value ='<?php echo $record['usertype'];?>'/>
            </div>
            <div>   
                <button name='edit'>Save</button>
            </div>
        </form>

        </div>
    </body>
</htm>