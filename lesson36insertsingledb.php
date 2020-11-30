<?php 
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");

function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno() > 0){
        die("Connection Failed");
    }else{
        return $db;
    }
}

// $query = "INSERT INTO users VALUES (0,'yuyu@gmail.com','123456','2020-11-29')";
// $query ="INSERT INTO users (email,password,created_at) VALUES ('hlahal@gmail.com','123456','2020-11-29') ";

// function sginsert($qry){
//     $database = dbconnection();
//     $result = mysqli_query($database,$qry);

//     $newroleid = mysqli_insert_id($database);
    

//     if($newroleid > 0){
//         echo "Single Data Insert Successfully. New role id is ${newroleid}";
//     }else{
//         echo "Insert Failed";
//     }

// }

// sginsert($query);


// function passcode($pass){
//     $safepw = md5(sha1(crypt($pass,false)));
//     return $safepw;
// }

// function singledata($mail,$pass,$date){
//     $database=dbconnection();
//     $query="INSERT INTO users (email,password,created_at) VALUES ('$mail','$pass','$date')";

//     $result = mysqli_query($database,$query);

//     $newroleid = mysqli_insert_id($database);
    
//     if($newroleid > 0){
//         echo "Single Data Insert Successfully. New role id is ${newroleid}";
//     }else{
//         echo "Insert Failed";
//     }
// }

// $password = passcode(123456);

// singledata("maungmaung@gmail.com",$password,"2020-11-29");



// MULTI INSERT


$query="INSERT INTO users (email,password,created_at) VALUES ('abc@gmail.com','123456','2020-11-29');";
$query .= "INSERT INTO users (email,password,created_at) VALUES ('efg@gmail.com','123456','2020-11-29');";
$query .= "INSERT INTO users (email,password,created_at) VALUES ('hij@gmail.com','123456','2020-11-29');";
$query .= "INSERT INTO users (email,password,created_at) VALUES ('klm@gmail.com','123456','2020-11-29');";

function multiinsertdata($qry){
    $database=dbconnection();
    $result = mysqli_multi_query($database,$qry);
    $newroleid = mysqli_insert_id($database);
    
    if($newroleid > 0){
        echo "Single Data Insert Successfully.";
    }else{
        echo "Insert Failed";
    }
}



multiinsertdata($query);




function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}
?>



