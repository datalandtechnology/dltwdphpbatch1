<?php
namespace app\database;
class class_db{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "dbone";

    private $database;

    public function __construct(){
        $this->database = new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
    }

    public function getallusers(){
        $stmt = $this->database->query("SELECT * FROM users");

//        while($row = $stmt->fetch_array()){
//            echo "id is =  ". $row["id"] . " and email is = ". $row["email"]. "<br/>";
//        }


        while($row = $stmt->fetch_object()){
            echo "id is =  ". $row->id . " and email is = ". $row->email. "<br/>";
        }

    }

    public function getsguser($id){
        $stmt = $this->database->prepare("SELECT * FROM users WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$email,$password,$status_id,$created_at);

        while($stmt->fetch()){
            echo "this is single user , id is = ${id} and email is = ${email} " . "<hr/>";
        }
    }

    public function getusersbystatus($status){
        $stmt = $this->database->prepare("SELECT * FROM users WHERE status_id=?");
        $stmt->bind_param("i",$status);
        $stmt->execute();
        $stmt->bind_result($id,$email,$password,$status_id,$created_at);

        while($stmt->fetch()){
            echo "this is ${status} user , id is = ${id} and email is = ${email} " . "<hr/>";
        }

    }

    public function insertsguser($email,$password,$status_id){
        $crtdate = date("Y-m-d");
//        echo $crtdate;
        $stmt = $this->database->prepare("INSERT INTO users (email,password,status_id,created_at) VALUES (?,?,?,?)");
        $stmt->bind_param("ssis",$email,$password,$status_id,$crtdate);
        $result = $stmt->execute();
        $lstinsertid = $stmt->insert_id;

        if($result){
            echo "Data Insert Successfully = id by ${lstinsertid}";
        }else{
            echo "Insert Failed";
        }

    }

    public function insertmultiusers($users){
        $crtdate = date("Y-m-d");
        $stmt = $this->database->prepare("INSERT INTO users (email,password,status_id,created_at) VALUES (?,?,?,?)");

        foreach ($users as $user){
            $stmt->bind_param("ssis", $user[0],$user[1],$user[2],$crtdate);
            $result = $stmt->execute();
            $lstinsertid = $stmt->insert_id;

                if($result){
                    echo "Data Insert Successfully = id ${lstinsertid}" . "<br/>";
                }else{
                    echo "Insert Failed". "<br/>";
            }
        }

    }


    public function updateuser($id,$status){
        $stmt = $this->database->prepare("UPDATE users SET status_id=? WHERE id=?");
        $stmt->bind_param("ii",$status,$id);
        $result = $stmt->execute();
        if($result){
            echo "Update Insert Successfully = id by ${id}" . "<br/>";
        }else{
            echo "Update Failed". "<br/>";
        }

    }

    public function deleteuser($id){
        $stmt = $this->database->prepare("DELETE FROM users WHERE id=?");
        $stmt->bind_param("i",$id);
        $result = $stmt->execute();

        if($result){
            echo "Delete Data Successfully = id by ${id}" . "<br/>";
        }else{
            echo "Delete Failed". "<br/>";
        }

    }

}
?>
