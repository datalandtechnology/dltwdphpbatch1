<?php

//php need server and database
//PHP is case sensitive

//phpinfo();

echo "Hello Myanmar <br/>";
echo ("hello Thailand");
echo "Hello","Myanmar","i Love Myanmar";
//echo ("hello","myanmar"); //result error
echo "<hr/>";
print "Hello Thailand";
print ("Hello Thailand <br/>");
//print "Hello","Myanmar","i Love Myanmar"; //result error
//print("hello","myanmar"); result error
echo "<hr/>";
echo 250;
echo "<hr/>";

var_dump("Hay");
var_dump(250);
var_dump(true);
var_dump(20.5);
var_dump(null);
echo "<hr/>";

//Escaping
echo "He's my brother";
echo "He's my brother and she's is my sister";
echo "<br/>";
echo 'He\'s my brother';
echo 'He\'s my brother and she\'s is my sister';
echo "<br/>";
echo "He\'s my brother";
echo "He\'s my brother and she\'s is my sister";
echo "<hr/>";

//VARIALBES
//varialble name     assigment operator     expression(value)   complete statement;
$thint ="thint thint htun";
$aung ='aung aung';

echo $thint;
echo $aung;
echo "<br/>";
echo "My name                                            is $thint";
echo "My name is ${thint}";
echo "My name is {$thint}";
echo "<br/>";
echo 'My name is                                           $thint';
echo 'My name is ${thint}';
echo 'My name is {$thint}';

echo "<hr/>";
echo "He's my brother , his name is \$aung";
echo "He's my brother , his name is \${aung}";
echo "He's my brother , his name is \{$aung}"; //result can not
echo "He's my brother , his name is {\$aung}";
echo 'He\'s my brother , his name is $aung';
echo "<hr/>";

$x = print("i am aung aung");
print $x;
echo $x;


//$y = echo("i am zaw zaw"); // result error


echo "<hr/>";

//Concatenate Operator,
$val1 = "Golden";
$val2= "Myanmar";

echo $val1." "."Land"." ".$val2;

//COMMENTS
//SINGLE COMMENT (forward select)

#single line comment
//single line comment

/*
this is comment line 1
this is comment line 2
this is comment line 3
this is comment line 4
*/

echo "<hr/>";

//Arithmetic Operators
//+ - * / %


$num1=10;
$num2=12;

echo $num1+$num2;
var_dump($num1+$num2);
echo "<br/>";
echo $num1-$num2;
echo "<br/>";
echo $num1*$num2;
echo "<br/>";
echo $num1/$num2;

echo "<hr/>";


$num1="10";
$num2="12";
echo $num1+$num2;
var_dump($num1+$num2);
echo "<br/>";
echo $num1-$num2;
echo "<br/>";
echo $num1*$num2;
echo "<br/>";
echo $num1/$num2;

echo "<hr/>";


$num1=10; // same with "10"
$num2=12; // same with "10"
echo "$num1+$num2";
var_dump("$num1+$num2");
echo "<br/>";
echo "$num1-$num2";
echo "<br/>";
echo "$num1*$num2";
echo "<br/>";
echo "$num1/$num2";

echo "<hr/>";


//Assigment Operator

//ASSIGN REASSIGN
$name=""; //Declare
$name=NULL; //Declare
$name = "Mya Mya"; //assign //initialize
$name = "Hla Hla"; //reasign
echo $name;


echo "<hr/>";


$a = 150;
$b = 200;
$a = $b;
echo $a;

echo "<hr/>";


//Increment Operator and Decrement Operators ( right to left )
// ++ --
$i = 10;
echo $i . "<br/>";
//$i = $i + 1;
//$i += 1;
$i++;
echo $i;
echo "<br/>";

$y = 10;
echo $y . "<br/>";
//$y = $y - 1;
//$y -= 1;
$y--;
echo $y;
echo "<hr/>";


$num1=100;
$num1+=40;
// $num1-=40;
// $num1*=40;
// $num1/=40;
// $num1%=40;

// echo $num1+20;
echo $num1;

echo "<hr/>";




//Comparison Operators
//== === != > < >= <=






//String Return
$abc="I love mandalay";
$count = strlen($abc);
echo $count;

echo "<hr/>";


//Ternary Operator

//(condition) ? " " : " ";

echo (10 > 1) ? "your condition is correction " : "your condition is false";

echo "<hr/>";




?>