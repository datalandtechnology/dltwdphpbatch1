<?php

//initialization
//do{
//    echo result;
//    increment;
//}while(true);



$val = 0;

do{
    echo "this number is ". $val . "<br/>";
    $val++;
}while($val <= 20);

echo "final value of \$val is = ". $val;

echo "<hr/>";

$i = 1;

do{
    $i++;
    echo "this number is ". $i . "<br/>";

}while($i <= 20);

echo "final value of \$i is = ". $i;

echo "<hr/>";


$val = 10;

do{
    echo "this number is ". $val . "<br/>";
    $val--;
}while($val >= 0);

echo "final value of \$val is = ". $val;


?>