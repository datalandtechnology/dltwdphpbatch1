<?php
class class_accessmodifier{
    public $fullname = "Tin Htut Aung";
//    private $fullname = "Tin Htut Aung"; // Showing Error
//    protected $fullname = "Tin Htut Aung"; // Showing Error


    public function getnum(){
        $num = 10;
        echo $num; // Can print cuz variable is inside of method
//        echo $fullname; cam't print
    }
}


$obj =new class_accessmodifier;
echo "This is Class Access Modifier". "<br/>";
echo $obj->fullname . "<br/>";
$obj->getnum();
echo "<hr/>";
?>