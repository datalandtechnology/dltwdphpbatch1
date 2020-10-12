<?php
//var_dump
$val1='Zaw Myint Maung\'s';
$val2="Zaw Myint Maung\"s ";
echo "$val1";
echo "{$val2}";


echo "<hr/>";

//statement function
$num1="Aung Aung";
var_dump($num1);
if(is_string($num1)){
echo "Your Variable is String ";
}

echo "<hr/>";

$num2=150;
var_dump($num2);
if(is_numeric($num2)){
echo "Your Variable is Numeric ";
}

echo "<hr/>";

$num3=20.5;
var_dump($num3);
if(is_float($num3)){
echo "Your Variable is Float ";
}

echo "<hr/>";


$num4=false;
var_dump($num4);
if(is_bool($num4)){
echo "Your Variable is Boolean ";
}

echo "<hr/>";


$num5=[1,2];
var_dump($num5);
if(is_array($num5)){
echo "Your Variable is Array ";
}

echo "<hr/>";

$num6=[];
var_dump($num6);
if(empty($num6)){
echo "Your Variable is Empty ";
}

echo "<hr/>";

$num7=12;
var_dump($num7);
if(is_int($num7)){
echo "Your Variable is Int ";
}

?>