<?php
class class_accessencapsulation{
    private $fullname="Kyaw Kyaw Aung";

    public function getter(){
        echo $this->fullname;
    }
}
$obj = new class_accessencapsulation;
echo "This is access to Encapsulation"."<br/>";
$obj->getter();
echo "<hr/>";
?>