<?php
//Regular Function - manual function
function regfun1(){
    echo "this is regular manual function";
}
regfun1();
echo "<br/>";

//Anonymous Function (Name Less Function ) - manual
$anonfun1 = function (){
    echo "this is anno function ". "<br/>";
};
$anonfun1();
//Anonymous Function (Name Less Function ) - single parameter
$anonfun2 = function ($name){
    echo "this is anno function . getting value is ${name} ". "<br/>";
};
$anonfun2("aung aung");
//Anonymous Function (Name Less Function ) - multi parameter
$anonfun3 = function ($name,$age){
    echo "this is anno function . getting value is ${name} . he or she age is ${age}". "<br/>";
};
$anonfun3("aung aung",30);

echo "<hr/>";


//Lambda Style

function mycal($num1,$num2,$onefun){
    $total = $num1 + $num2;
    $onefun($total);
}

$fun = function($result){
    echo "total result is = ${result}". "</br>";
};

mycal(100,200,$fun);

//Closure Function
$num1 = 300; //Global Variable
$num2 = 400; //Global Variable
function getglo(){
    global $num1;
    global $num2;
    echo "This is regular function . my getting value is ". $num2 . "</br>";
}
getglo();


$clofun = function() use($num1,$num2){
    echo "This is closure function . my getting value is ". $num1. " Second value is = ${num2}". "<br/>";
};
$clofun();

//Dynamic Function
//-manual function
$dynfun1 = create_function('','echo "this is Dynamic Function "."<br/>";');
$dynfun1();

//-single function
$dynfun2 = create_function('$name','echo "this is Dynamic Function.my getting value is ${name} "."<br/>";');
$dynfun2("aung aung");

//-multi function
$dynfun3 = create_function('$name,$age','echo "this is Dynamic Function.my getting value is ${name} and he or she age is ${age} "."<br/>";');
$dynfun3("aung aung",25);
echo "<hr/>";
?>