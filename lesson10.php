<?php
$name = array("aung aung","maung maung", "zaw zaw","kyaw kyaw");
echo count($name);

echo "<pre>".print_r($name,"false")."</pre>";

echo "<hr/>";

$name = array();
$name[0] = "maung maung";
$name[1] = "maung maung";
echo $name[1];

echo "<hr/>";


$val1=["red","blue","black","gray","green"]; //manual array
$val2 = array("red","blue","black","gray","green");

var_dump($val1);
echo "<br/>";
echo $val1[0]; //manual array

echo "<hr/>";

$val3=["one"=>"this is post one",
    "two"=>"this is post two",
    "three"=>"this is post three",
    "four"=>"this is post four"]; //Associative array
$val4=array("one"=>"this is post one",
    "two"=>"this is post two",
    "three"=>"this is post three",
    "four"=>"this is post four");

var_dump($val3);
echo "<br/>";
echo $val3["two"];

echo "<hr/>";

$val5=[
    ["name"=>"Aung Aung","age"=>"20"],
    ["name"=>"Maung Maung","age"=>"30"],
    ["name"=>"Mya Mya","age"=>"28"],
    ["name"=>"Hla Hla","age"=>"18"]
]; //Multidimensional array

$val6=array(
    array("name"=>"Aung Aung","age"=>"20"),
    array("name"=>"Maung Maung","age"=>"30"),
    array("name"=>"Mya Mya","age"=>"28"),
    array("name"=>"Hla Hla","age"=>"18")
);

$val6=array(
    array("red","green","blue","white"),
    array("maung maung","aung aung","kyaw kyaw","zaw zaw"),
    array("apple","orange","mango","peach"),
);

var_dump($val5);
echo "<br/>";
echo $val5[1]["name"];
echo "<br/>";
echo $val6[2][0];


echo "<hr/>";


foreach($val1 as $x=>$data){
    echo $data. "<br/>";
}



echo "<hr/>";

echo "Ass Array". "<br/>";
foreach($val2 as $key=>$value){
    echo $key. "<br/>";
    echo $value. "<br/>";
}

echo "<hr/>";
echo "Ass Multi". "<br/>";
foreach($val5 as $multi){
//    echo $multi["name"];
    foreach($multi as $a=>$b){
        echo "key is ${a} and value is ${b}"."<br/>";
    }

}

echo "<hr/>";








$val1=["red","blue","black","gray","green"]; //manual array
$key = array_keys($val1);
var_dump($val1);
echo "<br/>";
var_dump($key);

for($i=0 ; $i < count($val1) ; $i++){
    echo "this is manual array by forloop = index key is ". $key[$i] ." and value is ". $val1[$i]. "<br/>";
}

$x = 0;
$key = array_keys($val1);
while($x < count($val1)){
    echo "this is manual array by whileloop = index key is ". $key[$x] ." and value is ". $val1[$x]. "<br/>";
    $x++;
}

$y=0;
$key = array_keys($val1);
do{
    echo "this is manual array by dowhileloop = index key is ". $key[$y] ." and value is ". $val1[$y]. "<br/>";
    $y++;
}while($y < count($val1));



echo "<hr/>";





$val3=["one"=>"this is post one",
    "two"=>"this is post two",
    "three"=>"this is post three",
    "four"=>"this is post four"]; //Associative array

$key = array_keys($val3);
//var_dump($val3);
echo "<br/>";
//var_dump($key);
//echo "<pre>".print_r($key,true)."</pre>";

for($i=0 ; $i < count($val3) ; $i++){
//    var_dump($key[$i]);
    echo "this is assoc array by for = key is ". $key[$i]." value is ". $val3[$key[$i]] . "<br/>";
}

$x = 0;
$key = array_keys($val3);
while($x < count($val3)){
    echo "this is assoc array by whileloop = key is ". $key[$x]." value is ". $val3[$key[$x]] . "<br/>";
    $x++;
}

$y=0;
$key = array_keys($val3);
do{
    echo "this is assoc array by dowhileloop = key is ". $key[$y]." value is ". $val3[$key[$y]] . "<br/>";
    $y++;
}while($y < count($val3));





echo "<hr/>";





$val5=[
    ["name"=>"Aung Aung","age"=>"20"],
    ["name"=>"Maung Maung","age"=>"30"],
    ["name"=>"Mya Mya","age"=>"28"],
    ["name"=>"Hla Hla","age"=>"18"]
]; //Multidimensional array


$key = array_keys($val5);
//var_dump($val5);
echo "<br/>";
//var_dump($key);
echo "<br/>";
//echo "<pre>".print_r($key,true)."</pre>";

for($i=0 ; $i < count($val5) ; $i++){
    $newkey = array_keys($val5[$key[$i]]);

    for($j=0 ; $j < count($newkey) ; $j++){
//        var_dump($val5[$i][$newkey[$j]]);
        echo "this is multi array by forloop = key is ". $newkey[$j]." value is ". $val5[$i][$newkey[$j]] . "<br/>";
    }
}


$x = 0;
$key = array_keys($val5);

while($x < count($val5)){

    $newkey = array_keys($val5[$key[$x]]);

    $y = 0;

    while($y < count($newkey)){
        echo "this is multi array by whileloop = key is ". $newkey[$y]." value is ". $val5[$x][$newkey[$y]] . "<br/>";
        $y++;
    }

    $x++;

}



$g = 0;
$key = array_keys($val5);

do{

    $newkey = array_keys($val5[$key[$g]]);

    $h = 0;

    do{
        echo "this is multi array by dowhileloop = key is ". $newkey[$h]." value is ". $val5[$g][$newkey[$h]] . "<br/>";
        $h++;
    }while($h < count($newkey));

    $g++;

}while($g < count($val5));

?>