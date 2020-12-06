<?php
$to = "myamya@localhost";
$subject = "Happy Birthday";
$message = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,";
$header = "From:sale@dlt.com\r\n";
$header .= "Content-Type:text/html";

// \r Enter
// \n line break

// Single / Multi Send
function sendmail($x,$y,$z,$a){
    $mail = mail($x,$y,$z,$a);

    if($mail){
        echo "Send Successful";
    }else{
        echo "Send Failed";
    }
}


// sendmail($to,$subject,$message,$header)


$myarrs = [
    ["id"=>1,"email"=>"aungaung@localhost","password"=>"qwertyuiop"],
    ["id"=>2,"email"=>"maungmaung@localhost","password"=>"qwertyuiop"],
    ["id"=>3,"email"=>"susu@localhost","password"=>"qwertyuiop"],
    ["id"=>4,"email"=>"myamya@localhost","password"=>"qwertyuiop"],
];

// echo count($myarrs);

//Multi Send
foreach($myarrs as $data){
    $to = $data["email"];
    sendmail($to,$subject,$message,$header);
}




?>


<!-- mail(to,subject,message,header,parameter); //must be to sbj msg header / optional parameter

to = who ?
subject = title
message = descriptions (text/plain or text/html )
header = from (text/plain or text/html )
parameter = reply / forward -->