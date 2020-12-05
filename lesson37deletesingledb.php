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

function singledelete($id){
    $database = dbconnection();
    $query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($database,$query);
    if($result){
        echo "Deleted ID Number ${id}";
    }
}

singledelete(10);


function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}


?>






