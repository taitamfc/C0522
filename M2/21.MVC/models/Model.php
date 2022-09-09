<?php
class Model {
    protected $conn;
    public function __construct(){
        $username = 'root';
        $password = '';
        $database = 'c10';
        $this->conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
    }
}