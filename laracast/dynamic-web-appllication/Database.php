<?php 

class Database{
    public $connection;

    public function __construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=robiul;charset=utf8mb4";
        $this->connection = new PDO($dsn, 'root', '@123456@');
    }

    public function query($sql){
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement;
    }
}