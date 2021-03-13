<?php

class Database{
    private $host="localhost";
    private $usr="root";
    private $pwd="giveaccess";
    private $dbName="mydata";

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName; 
        $pdo = new PDO($dsn, $this->usr, $this->pwd); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
        return $pdo;
    }
}