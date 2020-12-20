<?php

class class_magicgetandset
{
//    public $fullname = "Kyaw Kyaw";

    public function __get($property)
    {
        echo "You are trying to get property ${property}. it's not exists" . "<br/>";
    }

    public function __set($property, $value)
    {
        echo "You are trying to get property ${property} by passing ${value}" . "<br/>";
    }




}

$obj = new class_magicgetandset();
//var_dump(isset($obj->fullname));
//$obj->fullname;
$obj->address = "yangon";

echo "<hr/>";

?>