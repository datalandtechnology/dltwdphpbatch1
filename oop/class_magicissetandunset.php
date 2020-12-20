<?php

class class_magicissetandunset
{
//    public $name = "Mya Mya";

    public function __isset($property)
    {
        echo "You are trying to check set or not property ${property} . it is not exists sir" . "<br/>";
    }

    public function __unset($property)
    {
        echo "You are trying to check unset or not property ${property} . it is not really exists sir" . "<br/>";
    }

}

echo "This is Megic method isset and unset" . "<br/>";
$obj = new class_magicissetandunset();
//echo $obj->name;
//isset($obj->name);

//var_dump(isset($obj->name));

unset($obj->name);

//var_dump(isset($obj->name));

echo "<hr/>";
?>