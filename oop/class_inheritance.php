<?php
class class_inheritance{
    public $username = "koko";
    public $email = "koko@gmail.com";
    public $password = "123456";

    public function greeting(){
        echo " I  am from mandalay";
    }
}

class class_contact extends class_inheritance{

}

class class_social extends class_inheritance{

    //Own Method
    public function verifyfb(){
        echo "Are you ready to confirm Your FB Acc ??";
    }

    //Method Overwriting - Parent Method OV
    public function greeting(){
        echo "Sorry i am from Yangon";

        //Properties Overwriting - Parent Method OV
        $this->username = "kyaw kyaw";
        echo $this->username;
    }



}

echo "This is contact method"."<br/>";
$obj = new class_contact;
echo $obj->username."<br>";
$obj->greeting();
echo "<br/>";

$obj = new class_social();
echo $obj->password . "<br/>";
echo $obj->greeting(). "<br/>";
$obj->verifyfb(). "<br/>";
echo "<hr/>";
?>