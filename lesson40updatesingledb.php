<?php
define("DB_HOST","localhost");
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_NAME", "dbone");

function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno() > 0){
        die("Connection Failed");
    }else{
        return $db;
    }
}

// function singleupdate($id,$email,$password){
//     $database = dbconnection();
    
//     $query = "UPDATE users SET email='$email',password='$password' WHERE id=$id";
//     $result = mysqli_query($database,$query);

//     if($result){
//         echo "Updated ID Number ".$id;
//     }
// }

// singleupdate(1,"myaungmyaung@gmail.com","789456");


function changepassword($id,$password){
    $database = dbconnection();
    
    $query = "UPDATE users SET password='$password' WHERE id=$id";
    $result = mysqli_query($database,$query);

    if($result){
        echo "Updated ID Number ".$id;
    }
}

changepassword(9,"789456");




function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}


?>






