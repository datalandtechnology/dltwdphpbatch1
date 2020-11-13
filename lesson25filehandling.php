<?php

// Create File

// $file="fileserver/logs/test1.txt";
// $handler=fopen($file,"w");
// echo "file created";

// Read File

// Method 1 (Binary Data Return , limited characters)
// $file="fileserver/logs/test1.txt";
// $handler=fopen($file,"r");
// Length
// $filesize=filesize($file);
// $data=fread($handler,$filesize);
// echo $data;

// Method 2 (String data return , No limit)

// $file="fileserver/logs/test2.txt";

// if(file_exists($file)){
//     $data=file_get_contents($file);
//     echo $data;
// }else{
//     echo "No File Exists";
// }


// Write

// $file="fileserver/logs/text1.txt";
// $handler=fopen($file,"w");
// $message1 = "I Love Myanmar";
// $message2= "I Love Thailand";

// fwrite($handler,$message2);
// fclose($handler);
// echo "Successful Write";

// Appending
$file="fileserver/logs/text1.txt";
$handler=fopen($file,"a");
$message1 = " I Love Indonesia ";
$message2 = " I Love Srilanka  ";
fwrite($handler,$message2);
fclose($handler);
echo "Successful Appending";
?>