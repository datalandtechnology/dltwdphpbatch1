<?php
class datatypechecking{

    public function checktype($req){
        switch ($req){
            case is_string($req):
                echo "Input value is string type". "<br/>";
                break;
            case is_int($req):
                echo "Input value is integer type". "<br/>";
                break;
            case is_bool($req):
                echo "Input value is Boolen type". "<br/>";
                break;
            case is_float($req):
                echo "Input value is float type". "<br/>";
                break;
            case is_array($req):
                echo "Input value is Array type". "<br/>";
                break;
        }
    }



}

$obj = new datatypechecking();
echo "<hr/>";
echo "This is Data Type Checking." . "<br/>";

$obj->checktype("aung aung");
$obj->checktype(200);
$obj->checktype(True);
$obj->checktype(200.5);
$obj->checktype(["aung aung","maung maung"]);
echo "<hr/>";

?>
