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


//        while($row = $stmt->fetch_object()){
//            echo "id is =  ". $row->id . " and email is = ". $row->email. "<br/>";
//        }

        while($row = $stmt->fetch_assoc()){
            echo "id is =  ". $row["id"] . " and email is = ". $row["email"]. "<br/>";
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
            echo "this is ${status} user , id is = ${id} and email is = ${email} and status is ${status_id} " . "<hr/>";
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



    public function getsguserinfo($id){
        $stmt = $this->database->prepare("
        SELECT
            ur.email as useremail,
            st.name as status_name,
            ur.created_at as crtdate
        FROM
            users as ur
        LEFT JOIN
            status as st
        ON
            ur.status_id = st.id
        WHERE
            ur.id = ?
        ");

        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($useremail,$status_name,$crtdate);

        while($stmt->fetch()){
            echo "this user id is = ${id} and email is ${useremail} and he or she is ${status_name} stage  and created at ${crtdate}" . "<hr/>";
        }
    }

    public function getalluserbystatusname($status_id){
        $stmt = $this->database->prepare("
        SELECT
        ur.id as userid,
        ur.email as useremail,
        st.name as status_name,
        ur.created_at as crtdate
        FROM
        status as st
        RIGHT JOIN
        users as ur 
        ON 
        ur.status_id = st.id
        WHERE
        st.id = ?
        ");


        $stmt->bind_param("i",$status_id);
        $stmt->execute();
        $stmt->bind_result($userid,$useremail,$status_name,$crtdate);

        while($stmt->fetch()){
            echo "user id is ${userid} and email is ${useremail} and status is ${status_name} stage and created at ${crtdate} " . "<hr/>";
        }
    }


    public function getcontactwithuser($id){
        $stmt = $this->database->prepare("
        SELECT
        ct.id as contactid,
        ur.email as user_email,
        ct.phone as userphone,
        ct.address as useraddress
        FROM
        contacts as ct
        LEFT JOIN
        users as ur
        ON 
        ct.user_id = ur.id
        WHERE
        ct.id = ?
        ");

        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($contactid,$user_email,$userphone,$useraddress);

        while($stmt->fetch()){
            echo "contact id ${contactid} and email is ${user_email} and phone is ${userphone} and address is ${useraddress} ". "<hr/>";
        }
    }








}
?>

