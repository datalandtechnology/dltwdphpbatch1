<?php
//Regular EXpression
//search/replace/split/match

//preg_match(delemeter,string);

//Delemeter
//"/ /","+ +","! !","# #","% %","* *"

//Anchors
// ^ (caret,hat) , $

//Man = check for exact char is contain or not
//^Man = check for char is start of string
//Man$ = check for char is end of string

$city ="I Love Mandalay";

//$result = preg_match("%Man%",$city); //case sensitive - exact string and no space result yes
//$result = preg_match("/\s/",$city); //check space bar result = yes
//$result = preg_match("/^Man/",$city); //exact string no char much be start with Man result = no
//$result = preg_match("/Man$/",$city); //exact string no char much be end with lay result = no
$result = preg_match("/^12345$/",$city); //exact string no char much be end with lay result = no

echo ($result ? "Yes" : "No");

echo "<hr/>";

//Case Sensitive (i)

$city ="I Love Mandalay";

$result = preg_match("/man/i",$city); //result = yes

echo ($result ? "Yes" : "No");

echo "<hr/>";

//Character Class

$city ="I Love Mandalay 012345";

//$result = preg_match("/[0-9]/",$city); //string must be contain 0-9 , result yes [6-9]
//$result = preg_match("/[a-z]/",$city); //string must be contain a-z , result yes
//$result = preg_match("/[A-Z]/",$city); //string must be contain A-Z , result yes



//$result = preg_match("/^[A-Z]/",$city); //string must be contain A-Z and char must start, result yes
//$result = preg_match("/^[a-z]/",$city); //string must be contain a-z and char must start, result no
//$result = preg_match("/^[0-9]/",$city); //string must be contain a-z and char must start, result no

//$result = preg_match("/[a-z]$/",$city); //string must be contain a-z and char must start, result no
$result = preg_match("/[A-Z]$/",$city); //string must be contain a-z and char must start, result no
//$result = preg_match("/[0-9]$/",$city); //string must be contain a-z and char must start, result yes

echo ($result ? "Yes" : "No");


?>

