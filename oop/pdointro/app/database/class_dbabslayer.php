<?php
namespace app\database;

class class_dbabslayer
{
    private $db;

    public function __construct()
    {
        $this->db = class_db::getinstance()->getdatabase();
    }


    public function getallusers($status)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE status_id=:status");
        $stmt->bindParam(":status", $status);
        $stmt->execute();

//        $stmt->bindColumn("email" , $email);
//        $stmt->bindColumn("password" , $password);
//        $stmt->bindColumn("created_at",$created_at);
//        while ($stmt->fetchObject()){
//            echo "email is ${email} and password is ${password} , created at ${created_at}". "<br>";
//        }

//
//        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
//        foreach ($result as $user) {
//            echo "email is ". $user["email"]. " and password is ". $user["password"]. " status is ". $user["status_id"]. "<br/>";
//        }
//


        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach ($result as $user) {
            echo "email is " . $user->email . " and password is " . $user->password . " status is " . $user->status_id . "<br/>";
        }

    }


    public function getsguser($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $stmt->bindColumn("email", $email);
        $stmt->bindColumn("password", $password);
        $stmt->bindColumn("status_id", $status_id);

//            $result = $stmt->fetchObject();
//            echo "email is $result->email and password is $result->password and status is $result->status_id";


        $result = $stmt->fetch();
        echo "email is " . $result["email"] . " and  password is " . $result["password"];
    }

    public function deletesguser($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id=:id ");
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();

        if ($result) {
            echo "Delete Successful";
        } else {
            echo "Delete Failed";
        }
    }

    public function insertsguser($email, $password, $status_id)
    {
        $crtdate = date("Y-m-d");
        $stmt = $this->db->prepare("INSERT INTO users (email,password,status_id,created_at) VALUE (:email,:password,:status_id,:created_at)");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":status_id", $status_id);
        $stmt->bindParam(":created_at", $crtdate);

        $result = $stmt->execute();
        $lastinsertid = $this->db->lastInsertId();

        if ($result) {
            echo "Successful insert by id number ${lastinsertid}";
        } else {
            echo "Insert Failed";
        }
    }


    public function insertmultiusers($users)
    {
        $crtdate = date("Y-m-d");
        $stmt = $this->db->prepare("INSERT INTO users(email,password,status_id,created_at) VALUE (:email,:password,:status_id,:created_at)");

        foreach ($users as $user) {
            $stmt->bindParam(":email", $user[0]);
            $stmt->bindParam(":password", $user[1]);
            $stmt->bindParam(":status_id", $user[2]);
            $stmt->bindParam(":created_at", $crtdate);
            $result = $stmt->execute();
            $lastinsertid = $this->db->lastInsertId();

        }

        if ($result) {
            echo "Successful insert , by id ${lastinsertid}" . "<br/>";
        } else {
            echo "Insert Failed";
        }

    }

    public function updateuserstatus($userid, $status_id)
    {
        $stmt = $this->db->prepare("UPDATE users SET status_id=:status WHERE id=:id");
        $stmt->bindParam(":status", $status_id);
        $stmt->bindParam(":id", $userid);
        $result = $stmt->execute();

        if ($result) {
            echo "Successful Updated for ${userid}";
        } else {
            echo "Update Failed";
        }

    }


    public function getalluserbystatusname($status)
    {
        $stmt = $this->db->prepare("
        SELECT
            ur.email as useremail,
            ur.password as userpassword,
            st.name as status_name,
            ur.created_at as usercreateddate
            FROM
            users as ur
            LEFT JOIN
                status as st
            ON
            ur.status_id = st.id
            WHERE
            ur.status_id = :status
        ");

        $stmt->bindParam(":status", $status);
        $stmt->execute();


//        $stmt->bindColumn("useremail", $email);
//        $stmt->bindColumn("userpassword", $password);
//        $stmt->bindColumn("status_name", $status_name);
//        $stmt->bindColumn("usercreateddate", $crtdate);
//
//        while ($stmt->fetchObject()) {
//            echo "email is ${email} and password is ${password} , stage is ${status_name} , created at ${crtdate}" . "<br/>";
//        }


//        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
//        foreach ($result as $user){
//            echo "email is ". $user["useremail"]. " and password is ". $user["userpassword"]." stage is". $user["status_name"]. "<br/>";
//        }


        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach ($result as $user){
            echo "email is ". $user->useremail. " and password is ". $user->userpassword." stage is". $user->status_name. "<br/>";
        }
    }


}

?>


