<?php
require_once('lib/Database.php');

class Mahasiswa{
    public $db ;
    
    function __construct(){
        $this->db = new Database();
    }

    function add($data){
        echo $data['nama'];
    }
}