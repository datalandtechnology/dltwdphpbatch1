<?php

//if statement
$a=10;
$b=20;

//if($a > $b){
//    echo "Condition is OK";
//}else{
//    echo "Condition is false";
//}

//SHORT HAND
if($a<$b)
    echo "condition is true ";
//echo "abc"; // result error
else
    echo "condition is false ";


$val="black";
$vbl=$val;

//Assigning by refrence
echo $vbl; 

echo "<hr/>";

 #using refrence variable


if($vbl == "red"){ 
    echo "my fav color is red";
}else{
    echo "your fav color is not red";
}

echo "<hr/>";

if($val=="red"){
    echo "my fav color is red"." "."input value is " . $val;
}else{
    echo "my fav color is red "."but input value is ". $val;
}

echo "<hr/>";



if($val=="red"){
echo "value color is " . $val;
}elseif($val=="white"){
echo "value color is ". $val;
}else{
echo "your color is ". $val;
}

echo "<hr/>";

//Logical Operator
//AND(&&) OR(||) is call pipe NOT(!)

$num1=40;
$num2=20;
$num3=0;

if($num1 > $num2 &&  $num1 > $num3){
echo "it is true";
}else{
    echo "false";
}

if($num1 < $num2 ||  $num1 > $num3){
    echo "true";
    }else{
        echo "false";
    }

echo "<hr/>";

if(!($num1 < $num2)){
    echo "it is true";
    }else{
        echo "it is false";
}

echo "<hr/>";



switch ($num1) {
    case "10":
        echo "input value is  ". $num1;
    break;

    case "40":
    echo "input value is ".$num1;
    break;

    case "80":
        echo "Distinction ".$num1;
        break;

    default:
    echo "input value is not 10 and 20 ". "value is ". $num1;
}


?>