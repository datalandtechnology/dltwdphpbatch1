<?php

class class_magiccallandcallstatic
{

    public function __call($method, $parameters)
    {
        echo "You are trying to call Non static method ${method}. it's not exists sir " . "<br/>";
//        echo "${property}"; // Result error
        echo "<pre>" . print_r($parameters, true) . "</pre>";
    }

    public static function __callstatic($method, $parameters)
    {
        echo "You are trying to call Static method ${method}. it's not exists sir " . "<br/>";
//        echo "${property}"; // Result error
        echo "<pre>" . print_r($parameters, true) . "</pre>";
    }

}

echo "This is Magic method call and callstatic" . "<br/>";
$obj = new class_magiccallandcallstatic();
//$obj->meth();
//$obj->meth("aung aung");
//$obj->meth(["aung aung","kaung kaung"]);


//$obj::meth2();
//$obj::meth2("aung aung");
$obj::meth2(["aung aung", "kaung kaung"]);


?>