<?php
//Variable scope
$val=20;  //Global Variable

function varialblecope(){
    $num=10; // Local Variable
    echo $num;
}

echo $val;
echo "<br/>";
varialblecope();
echo "<br/>";
// echo $num; local variable does not working in outside;
echo "<hr/>";

$x=50;
$y=100;

function vscope(){
   global $x;
   global $y;
   $z=$x+$y;
    return $z;
}

echo $x;
echo "<br/>";
echo vscope();
echo "<hr/>";


//Static Variable
function staticvariable(){
    STATIC $val=0;
    $val++;
    $val;
}

staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();

?>