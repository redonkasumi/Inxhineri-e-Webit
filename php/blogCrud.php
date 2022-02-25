<?php
require_once('connection.php');
class Blog extends dbConnect {
private $id;
private $title;
private $description;
protected $dbconn;

public function __construct($id='', $title='',
$description='')
{
$this->id=$id;
$this->title=$title;
$this->description=$description;
$this->dbconn=$this->connectDB();
}

public function setId($id){
    $this->id=$id;
    }
    public function getId(){
    return $this->id;
    }
    public function setTitle($title){
    $this->title=$title;
    }
    public function getTitle(){
    return $this->title;
    }
    public function setDescription($description){
    $this->description=$description;
    }
    public function getDescription(){
    $this->description;
    }
 

    public function insertoDhenat(){
        try{
        $sql="INSERT INTO blog (ID,title,description)
        VALUES (?,?,?)";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->id,$this->title,$this->description]);
        echo "<script>
        alert('te dhenat jane regjistruar me sukses');
        document.location='blog.php';
        </script>";
        }catch (PDOException $pdoe) {
            echo $pdoe->getMessage();
            }
    }

    public function lexoDhenat(){
        $sql='SELECT * FROM blog';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $rezultati =$stm->fetchAll(PDO::FETCH_ASSOC);
        return $rezultati;
    }


    public function lexoDhenatSipasIDs($id){
            $sql='SELECT * FROM blog where ID=:id';
            $stm=$this->dbconn->prepare($sql);
            $stm->execute([':id'=>$this->id=$id]);
            $rezultati =$stm->fetch(PDO::FETCH_ASSOC);
            return $rezultati;
    }

    public function updateDhenat(){
        $sql='UPDATE blog SET title=?, description=? where ID=?';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->title, $this->description]);
    }

    public function deleteDhenat($id){
        $sql='DELETE FROM blog WHERE ID=:id';
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':id',$id);
        $stm->execute();
        if ($stm==true){
        echo "<script>
        alert('te dhenat jane fshire me sukses');
        document.location='blog.php';
        </script>";
        }
        else {
        return false;
        }
        }
    
        

            
        
}
?>