<?php
 
 class DbConnect {
    private $servername= 'mysqldb12345'; //$servername = "172.24.0.2";
    private $username = "root";
    private $password = "example";
    private $dbname = "mysql";

    public function connect(){
        try {
            $conn = new PDO("mysql:host=". $this->servername. ';dbname=' . $this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully. What DB do you wish to connect with?" .PHP_EOL;
            return $conn;
           } catch(PDOException $e) {
               echo "Connection failed: " . $e->getMessage() .PHP_EOL;
        }
    }
}

$db= new DbConnect();
$conn =$db->connect();
$query=$conn->prepare("show databases");
$query->execute();
$test= $query->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($test);
echo "</pre>";



?>
