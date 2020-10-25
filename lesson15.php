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
    echo $val;
}

staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();
echo "<hr/>";


$num=20;
$num2=50;
function myvale(&$num){
    $num=40;
    echo $num;
}
echo "this is first value form global num {$num}";
echo "<br/>";
echo "this is first value form global num2 {$num2}";
echo "<br/>";
myvale($num);
echo "<br/>";
echo "this is second value form global {$num}";
echo "<br/>";
echo "this is second value form global num2 {$num2}";


echo "<hr/>";

$abc=20;
function myvale1(&$val){
    $val=40;
    echo $val;
}

echo "this is first value form global {$abc}";
echo "<br/>";
myvale1($abc);
echo "<br/>";
echo "this is second value form global {$abc}";


?>