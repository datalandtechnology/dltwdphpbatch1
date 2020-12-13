<?php
class class_thisvariable{
    private $fullname = "Zin Kyaw";

    public function getname(){
        echo $this->fullname;
//        echo $this->fullname = "Mg Mg";
    }

}

$obj= new class_thisvariable;
echo "This is using \$this Variable ". "<br/>";
$obj->getname();
echo "<hr/>";

?>