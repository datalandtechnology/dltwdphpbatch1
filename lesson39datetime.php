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

function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}
?>