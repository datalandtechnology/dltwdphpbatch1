<?php
class class_constructor{

//    public function __construct(){
//        echo "i am start woking by automatically sir ! hee hee :P";
//    }

    public function __construct($name){
        echo "i am start woking by automatically sir ${name} ! hee hee :P";
    }



}
echo "This is Constructor"."<br/>";
//$obj = new class_constructor;
$obj = new class_constructor("Aung Aung");
echo "<hr/>";

?>