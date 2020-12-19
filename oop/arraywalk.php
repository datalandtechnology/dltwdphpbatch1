<?php

$myarr1 = ["red","black","white","green","blue"]; //manual arr

function myfun($value,$key){
    echo "Key is = ${key} and Value is = ${value}"."<br/>";
}
echo "This is array walk by manual array". "<br/>";
array_walk($myarr1,"myfun");

$myarr2 = ["name"=>"aung aung","age"=>"30","city"=>"mandalay","phone"=>"09123456"]; //associate arrr
echo "This is array walk by associate array". "<br/>";
array_walk($myarr2,"myfun");

$myarr3 = [
    ["name"=>"aung aung","age"=>"30","city"=>"mandalay","phone"=>"09123456"],
    ["name"=>"kyaw kyaw","age"=>"30","city"=>"mandalay","phone"=>"09123456"],
    ["name"=>"zaw zaw","age"=>"30","city"=>"mandalay","phone"=>"09123456"]
];// mutidimational array

function myfun2($val,$ky){
    foreach($val as $key=>$value){
        echo "Kye is = ${key} and Value is ${value}"."<br/>";
    }
}

echo "This is array walk by multi dimational  array". "<br/>";
array_walk($myarr3,"myfun2");

?>