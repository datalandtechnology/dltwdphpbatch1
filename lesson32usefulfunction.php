<?php
// Default Function

// Number Format
$num = 1230000;
echo number_format($num);
echo "<br/>";
echo number_format($num,"5");
echo "<br/>";
echo number_format($num,"0",".","-");
echo "<br/>";

// chunk-split ( String Type - Serial Number )
$b = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$ph = "0922042242";
echo chunk_split($b,5,"/");
echo "<br/>";
echo chunk_split($ph,3,"-");
echo "<br/>";

// lcfirst
echo lcfirst("This is lcfirst = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

// ucwords
echo ucwords("This is ucwords = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

echo strtoupper("This is strtoupper = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

echo strtolower("This is strtolower = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

$name=" Aung Aung ";
echo strlen($name);
echo "<br/>";

echo $name;
echo "<br/>";

// trim
echo trim($name);
echo "<br/>";
echo strlen(trim($name));
echo "<br/>";
echo trim("/ Aung Aung / Maung Maung / Kyaw Kyaw ","/");
echo "<br/>";

// ltrim left
echo strlen(ltrim($name));
echo "<br/>";
echo ltrim("/ Aung Aung /","/");
echo "<br/>";

// rtrim right
echo strlen(rtrim($name));
echo "<br/>";
echo rtrim("/ Aung Aung /","/");
echo "<br/>";


// Start CRYPT
$password = "123456";

// MD5 true = raw 16 chars binary format , false = raw 32 chars hax number
echo md5($password);
echo "<br/>";
echo md5($password,true);
echo "<br/>";
echo md5($password,false);

// SHA1 true= raw 20 chars binary format , false =raw 40 chars hax number

echo sha1($password);
echo "<br/>";
echo sha1($password,true);
echo "<br/>";
echo sha1($password,false);
echo "<br/>";

// Crypt hashed codes string DES Data Encryption Standard
echo crypt($password,false);
echo "<br/>";

echo md5(sha1(crypt($password,"dlt")));
echo "<br/>";

//End CRYPT

$z="i love mandalay , becuase mandalay is my hometown";
echo strpos($z,"mandalay");
echo "<br/>";

echo strrpos($z,"mandalay");
echo "<br/>";

echo stripos($z,"Mandalay");
echo "<br/>";

echo strripos($z,"Mandalay");
echo "<br/>";

echo substr_replace("Hello world","Mandalay",6);
echo "<br/>";

echo str_word_count($z);
echo "<br/>";
echo "<hr/>";

// Array as object ( Json ) 
// Object by Associate Arrary
$myarr = ["name"=>"maung maung","age"=>20,"address"=>"mandalay","phone"=>"09422042242"];
echo json_encode($myarr);
echo "<br/>";

$myarr2 = [
    ["name"=>"maung maung","age"=>20,"address"=>"mandalay","phone"=>"09422042242"],
    ["name"=>"zaw zaw","age"=>20,"address"=>"yangon","phone"=>"09422042242"],
    ["name"=>"aung aung","age"=>20,"address"=>"mandalay","phone"=>"09422042242"]
];

echo json_encode($myarr2);


?>