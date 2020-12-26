<?php
class class_magictostringandinvoke{
    public $name = "zaw zaw";
    public function __toString(){
        return "You are trying to print out your Obj". "<br/>";
    }

    public function __invoke(){
        return "You are trying to call obj as method"."<br/.>";
    }

    public function __clone(){
        echo "You are trying to clone obj"."<br/>";
    }
}

$obj = new class_magictostringandinvoke();
echo $obj;

echo $obj();


//$cc = $obj;
//echo $cc->name;

$cc = clone $obj;
//echo $cc->name;

echo "<hr/>";

?>