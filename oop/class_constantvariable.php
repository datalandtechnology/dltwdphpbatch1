<?php

//define("DB_HOST","localhost");

class class_constantvariable{
    public $name = "aung aung";
    public const DB_HOST = "localhost";
}

$obj = new class_constantvariable();
//echo $obj->name;

echo $obj::DB_HOST;


echo "<hr/>";
?>