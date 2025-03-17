<?php

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db ='my_data';
    private $conn;

    public function __construct (){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if($this->conn->connect_error){
            die("Connection failed:" . $this->conn->connect_error);
        }
    }

    public function getConnection(){
        return $this->conn;
    }
}
?>