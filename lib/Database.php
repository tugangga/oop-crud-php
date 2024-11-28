<?php
require_once('config/config.php');

class Database{
    public $host = HOST;
    public $user = USER;
    public $pass = PASSWORD;
    public $db = DATABASE;
    public $conn;

    function __construct(){
        $this->dbconnect();
    }

    function dbconnect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        }

}