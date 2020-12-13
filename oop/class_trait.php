<?php
trait class_trait{
    public $username ="koko";
    public $email = "koko@gmail.com";
    public $password ="123456";

    public function parentone(){
        echo "i am from parent";
    }

}

trait class_baby1{

    public function baby1(){
        echo "i am from baby1";
    }

}

class class_baby2{
    use class_trait;
    use class_baby1;

    public function baby2(){
        echo "i am from baby2";
    }
}

echo "This is Trait". "<br/>";
$obj = new class_baby2();
$obj->baby1();
echo "<br/>";
$obj->baby2();
echo "<br/>";
$obj->parentone();
echo "<br/>";
echo $obj->username;
echo "<hr/>";
?>