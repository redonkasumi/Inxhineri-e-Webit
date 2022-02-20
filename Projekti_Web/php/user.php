<?php
require_once('connection.php');
class User extends dbConnect {
private $id;
private $emri;
private $email;
private $password;
private $gender;
private $userType;
protected $dbconn;
public function __construct($id='', $emri='',
$email='', $password='', $gender='', $userType='user')
{
$this->id=$id;
$this->emri=$emri;
$this->email=$email;
$this->password=$password;
$this->gender=$gender;
$this->userType = $userType;
$this->dbconn=$this->connectDB();
}

public function setId($id){
    $this->id=$id;
    }
    public function getId(){
    return $this->id;
    }
    public function setEmri($emri){
    $this->emri=$emri;
    }
    public function getEmri(){
    return $this->emri;
    }
    public function setEmail($email){
    $this->email=$email;
    }
    public function getEmail(){
    $this->email;
    }
    public function setPassword($password){
    $this->password=$password;
    }
    public function getPassword(){
    return $this->password;
    }
    public function setGender($gender){
    $this->gender=$gender;
    }
    public function getGender(){
    return $this->gender;
    }
    public function setUserType($userType){
        $this->userType=$userType;
        }
        public function getUserType(){
        return $this->userType;
        }

    public function insertoDhenat(){
        try{
        $sql="INSERT INTO user (ID,name,email,PASSWORD,gender,usertype)
        VALUES (?,?,?,?,?,?)";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->id,$this->emri,$this->email,$this->password,$this->gender,$this->userType]);
        echo "<script>
        alert('dhenat jane REGJISTRUAR me sukses');
        document.location='index.html';
        </script>";
        }catch (PDOException $pdoe) {
            echo $pdoe->getMessage();
            }
    }
}
?>