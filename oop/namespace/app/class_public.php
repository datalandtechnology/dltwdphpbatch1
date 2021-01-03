<?php

namespace app;



class class_public{
    public function __construct(){
        echo "i am from public ". "<br/>";
    }

    public function myfun(){
        echo "i am my fun form public ". "<br/>";
    }


    public function mydate(){
        $getdate = new \DateTime();
        var_dump($getdate);
    }
}
?>