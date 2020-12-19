<?php
class class_magicgetandset{
    public $fullname = "Kyaw Kyaw";

    public function __get($property){
        echo "You are trying to get property ${property}. it's not exists";
    }

    public function __set($property, $value){
        echo "You are trying to get property ${property} by passing ${value}";
    }



}
$obj = new class_magicgetandset();
// $obj->address;


$obj->address = "yangon";

echo "<hr/>";

?>