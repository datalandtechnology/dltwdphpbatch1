<?php
class objectcasting{
    public function typecastingbyobj(classobj2 $req){
        var_dump($req);
    }
}

class classobj1{
    public $num1 = 100;
    public $num2 = 200;
}

class classobj2{

}

$obj = new objectcasting();

$cobj1 = new classobj1();
$cobj2 = new classobj2();


$obj->typecastingbyobj($cobj2);

echo "<hr/>";



?>
