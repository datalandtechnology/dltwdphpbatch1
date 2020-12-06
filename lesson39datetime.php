<?php

// 1 Jan 1970 UTC


date_default_timezone_set("Asia/Yangon");

$getdate = getdate();

// beautyprint($getdate);

echo "this is second = ". $getdate["seconds"]. "<br/>";
echo "this is minutes = ". $getdate["minutes"]. "<br/>";
echo "this is hours = ". $getdate["hours"]. "<br/>";
echo "this is mday = ". $getdate["mday"]. "<br/>";
echo "this is wday = ". $getdate["wday"]. "<br/>";
echo "this is mon = ". $getdate["mon"]. "<br/>";
echo "this is year = ". $getdate["year"]. "<br/>";
echo "this is yday = ". $getdate["yday"]. "<br/>";
echo "this is weekday = ". $getdate["weekday"]. "<br/>";
echo "this is month = ". $getdate["month"]. "<br/>";
echo "this is 0 = ". $getdate["0"]. "<br/>";


$time = time();
echo "this is time stamp = ". $time;


echo "<hr/>";

// DATE/TIME FORMAT 
// date("format",timestamp)

$date = date("a",$time);
echo "this is format a = " . $date . "<br/>"; //am/pm

$date = date("A",$time);
echo "this is format A = " . $date. "<br/>"; //AM/PM

$date = date("d",$time);
echo "this is format d = " . $date. "<br/>"; // day leading zero

$date = date("D",$time);
echo "this is format D = " . $date. "<br/>"; // Sum/Mon


$date = date("F",$time);
echo "this is format F = " . $date. "<br/>"; // December/January ...

$date = date("g",$time);
echo "this is format g = " . $date. "<br/>"; // hour by num (by 12hr no leading zero)

$date = date("G",$time);
echo "this is format G = " . $date. "<br/>"; // hour by num (by 247hr no leading zero)

$date = date("h",$time);
echo "this is format h = " . $date. "<br/>"; // hour by num (by 12hr leading zero)

$date = date("H",$time);
echo "this is format H = " . $date. "<br/>"; // hour by num (by 24hr leading zero)

$date = date("i",$time);
echo "this is format i = " . $date. "<br/>"; // minutes

$date = date("j",$time);
echo "this is format j = " . $date. "<br/>"; // month day no leading zero

$date = date("l",$time);
echo "this is format l = " . $date. "<br/>"; // week day full string

$date = date("L",$time);
echo "this is format L = " . $date. "<br/>"; // Leap year ( 1 = true , 0 = false)

$date = date("m",$time);
echo "this is format m = " . $date. "<br/>"; // month by num (leading zero)

$date = date("M",$time);
echo "this is format M = " . $date. "<br/>"; // month by string ( Dec / Jan)

$date = date("n",$time);
echo "this is format n = " . $date. "<br/>"; // month by num (no leading zero)

$date = date("r",$time);
echo "this is format r = " . $date. "<br/>";

$date = date("s",$time);
echo "this is format s = " . $date. "<br/>"; //Second

$date = date("U",$time);
echo "this is format U = " . $date. "<br/>"; //Time Stamp

$date = date("y",$time);
echo "this is format y = " . $date. "<br/>"; //Year (two digits)

$date = date("Y",$time);
echo "this is format Y = " . $date. "<br/>"; //Year (four digits)

$date = date("z",$time);
echo "this is format z = " . $date. "<br/>"; // day of year

echo "<hr/>";

$df = date("H:i:s",$time);
echo $df . "<br/>";
$df = date("H-i-s",$time);
echo $df . "<br/>";
$df = date("d/m/y",$time);
echo $df . "<br/>";
$df = date("D-M-Y",$time);
echo $df . "<br/>";
$df = date("Y/m/D",$time);
echo $df . "<br/>";
$df = date("d/m/Y h:i:s",$time);
echo $df . "<br/>";

function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>"; 
}


?>