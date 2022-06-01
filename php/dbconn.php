<?php

    $servername= 'mysqldb12345'; //$servername = "172.24.0.2";
    $username = "root";
    $password = "example";

    try {
     $conn = new PDO("mysql:host=$servername", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully" .PHP_EOL;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage() .PHP_EOL;
    }
?>
