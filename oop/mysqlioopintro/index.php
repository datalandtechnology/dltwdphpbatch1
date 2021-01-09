<?php

use app\database\class_db;

require_once "vendor/autoload.php";



class index{
    private $db;

    public function __construct(){
        $this->db = new class_db();

        $this->db->getallusers();

        $this->db->getsguser(3);


        $this->db->getusersbystatus(2);

//        $this->db->insertsguser("coco@gmail.com","123456",1);


        $users = [
          ["yoyo@gmail.com","123456",1],
          ["popo@gmail.com","123456",1],
          ["roro@gmail.com","123456",1],
          ["vovo@gmail.com","123456",1],
          ["bobo@gmail.com","123456",1],
          ["zozo@gmail.com","123456",1],
        ];

//        $this->db->insertmultiusers($users);


//        $this->db->updateuser(38,2);


        $this->db->deleteuser(3);


    }
}

$obj = new index();
?>