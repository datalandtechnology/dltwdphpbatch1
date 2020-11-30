<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");

function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno() > 0){
        die("Connection Filed");
    }else{
        return $db;
    }
}



function fetchsingledata($id){
    $database = dbconnection();
    $query = "SELECT * FROM users WHERE id=$id";
    // $query = "SELECT * FROM users WHERE id!=$id";
    $result = mysqli_query($database,$query);
    
    if(mysqli_num_rows($result) > 0){
        foreach($result as $data){
            echo "Id is =  ${data['id']}". "<br/>";
            echo "Email is = ${data['email']}". "<br/>";
        }
    }


}


fetchsingledata(5);








function beautyprint($arr){
    echo "<pre>".print_r($arr,true). "</pre>";
}
?>