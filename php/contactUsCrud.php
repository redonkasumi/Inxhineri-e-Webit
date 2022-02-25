<?php
require_once('connection.php');
class ContactUs extends dbConnect {
private $id;
private $username;
private $email;
private $message;
protected $dbconn;
public function __construct($id='', $username='',
$email='', $message='')
{
$this->id=$id;
$this->username=$username;
$this->email=$email;
$this->message=$message;
$this->dbconn=$this->connectDB();
}

public function setId($id){
    $this->id=$id;
    }
    public function getId(){
    return $this->id;
    }
    public function setUsername($username){
    $this->username=$username;
    }
    public function getUsername(){
    return $this->username;
    }
    public function setEmail($email){
    $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setMessage($message){
        $this->message=$message;
    }
    public function getMessage(){
            return $this->message;
    }
  

        public function insertoDhenat(){
            try{
            $sql="INSERT INTO contactus (ID,username,email,message)
            VALUES (?,?,?,?)";
            $stm=$this->dbconn->prepare($sql);
            $stm->execute([$this->id,$this->username,$this->email, $this->message]);
            echo "<script>
            alert('Mesazhi eshte derguar me sukses! ');
            document.location='index.php';
            </script>";
            }catch (PDOException $pdoe) {
                echo $pdoe->getMessage();
                }
        }

    public function lexoDhenat(){
        $sql='SELECT * FROM contactus';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $rezultati =$stm->fetchAll(PDO::FETCH_ASSOC);
        return $rezultati;

    }
    


    public function lexoDhenatSipasIDs($id){
            $sql='SELECT * FROM contactus where ID=:id';
            $stm=$this->dbconn->prepare($sql);
            $stm->execute([':id'=>$this->id=$id]);
            $rezultati =$stm->fetch(PDO::FETCH_ASSOC);
            return $rezultati;
    }

    public function updateDhenat(){
        $sql='UPDATE contactus SET username=?, email=?, message=? where ID=?';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->username, $this->email, $this->message]);
    }

    public function deleteDhenat($id){
        $sql='DELETE FROM contactus WHERE ID=:id';
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':id',$id);
        $stm->execute();
            if ($stm==true){
                echo "<script>
                alert('te dhenat jane fshire me sukses');
                document.location='contactUsMessages.php';
                </script>";
            }
                else {
                    return false;
                }
    }
            
        
}
?>