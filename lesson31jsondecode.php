<?php
// $arr = ["red","green","yello","black"];
// var_dump($arr);
// echo "<hr/>";
// print_r($arr) ;
// echo "<hr/>";
// echo "<pre>" . print_r($arr,true) . "</pre>";
// beautyprint($arr);

// $arr2 = ["mang maung","aung aung","zaw zaw","kyaw kyaw"];
// beautyprint($arr2);


// $arr3= [
//     ["mang maung","aung aung","zaw zaw","kyaw kyaw"],
//     ["su su","mya mya","hla hla","kyaw kyaw"],
//     ["mang maung","aung aung","zaw zaw","kyaw kyaw"],
// ];

// beautyprint($arr3);


// $arr4 = [
//     ["id"=>"1","name"=>"maung maung","age"=>27,"city"=>"mawamyint"],
//     ["id"=>"2","name"=>"aung aung","age"=>27,"city"=>"mawamyint"],
//     ["id"=>"3","name"=>"zaw zaw","age"=>27,"city"=>"mawamyint"],
//     ["id"=>"4","name"=>"kyaw kyaw","age"=>27,"city"=>"mawamyint"],
//     ["id"=>"5","name"=>"mya mya","age"=>27,"city"=>"mawamyint"]
// ];
// $arrjson = json_encode($arr4);
// beautyprint($arrjson);


// Custom Reuseable Function
function beautyprint($array){
    echo "<pre>" . print_r($array,true) . "</pre>";
}

$file = "myjson.json";
if(file_exists($file)){
$handler = fopen($file,"r");
$filesize = filesize($file);
$fileread = fread($handler,$filesize);
$jsontoarray = json_decode($fileread); // Json Object to Array

foreach($jsontoarray as $array){
    foreach($array as $key=>$value){
        echo "key is ${key} ". " value is ${value}". "<br/>";
    }
}


}


echo "<hr/>";

// Constants Value
define("name","Aung Aung");
echo name;
echo "<br/>";
define("age",26);
echo age;
echo "<br/>";
define("colors",["black","white","red"]);
echo colors[2];

?>