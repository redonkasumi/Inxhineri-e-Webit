<?php
class dbConnect{
private $conn =null;
private $host = 'localhost:3306';
private $dbname = 'projektiweb';
private $username = 'root';
private $password = '';
public function connectDB(){
try {
    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
    $this->username, $this->password);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
    $this->conn->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);

} catch (PDOException $pdoe) {
die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
}
return $this->conn;
}
}
?> 