<?php
abstract class class_abstractmethod{

    //concreate method
    public function myfun(){
        echo "i am my fun". "<br/>";
    }

    public abstract function firstabs();
}

abstract class subabs extends class_abstractmethod{
    public abstract function secondabs();
}

class mybabychild1 extends class_abstractmethod {
    //overwrite -> abstract method
    public function firstabs(){
        echo "i am firstabs from babychild"."<br/>";
    }

}

class mybabychild2 extends subabs{

    public function firstabs(){
        echo "i am firstabs form mybabychild2 ". "<br/>";
    }

    public function secondabs(){
        echo "i am secondabs form mybabychild2 "."<br/>";
    }
}

//$mychobj = new mybabychild1();
//$mychobj->firstabs();


$mych2obj = new mybabychild2();
$mych2obj->firstabs();
$mych2obj->secondabs();

?>