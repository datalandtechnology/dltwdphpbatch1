<?php
class class_databinding{
    public static $name = "aung aung";

    public static function classname(){
        return __CLASS__;
    }

    public function getclassname(){
//        echo $this->classname();

//        echo self::classname();

        echo static::classname();
    }


    public function getname(){
//        echo self::$name . "<br/>";
        echo static::$name . "<br/>";
    }
}

class childclass1 extends class_databinding {
    public static $name = "Kyaw kyaw";

    public static function classname(){
        return __CLASS__;
    }

//    public function getclassname(){
//        echo self::classname();
//    }


}

$obj = new class_databinding();
//echo $obj->classname();

$obj->getclassname();

echo "<br/>";
$obj->getname();

echo "<br/>";

$chi1obj = new childclass1();
$chi1obj->getclassname();
//echo $chi1obj::$name;

$chi1obj->getname();


echo "<hr/>";
?>