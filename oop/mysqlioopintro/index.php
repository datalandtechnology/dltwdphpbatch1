<?php

use app\database\class_db;

require_once "vendor/autoload.php";



class index{
    private $db;

    public function __construct(){
        $this->db = new class_db();

        $this->db->getallusers();

        $this->db->getsguser(3);
    }
}

$obj = new index();
?>