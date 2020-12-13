<?php
class class_updateencapsulation{
    private $fullname = "Kyaw Ko Ko";

    public function setter($name){
        $this->fullname = $name;
    }

    public function getter(){
        echo $this->fullname;
    }
}

$obj = new class_updateencapsulation();
echo "This is update to Update Encapsulation"."<br/>";
$obj->setter("Ko Ko Kyaw");
$obj->getter();
echo "<hr/>";
?>