<?php
require_once "class_dbabslayer.php";
class class_db extends class_dbabslayer {

    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        parent::__construct($db_host, $db_name, $db_user, $db_pass);
    }

    public function dbconnect()
    {
        if($this->database == null){
            try{
                $this->database = new \PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user,$this->db_pass);
                $this->database->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

                if($this->database){
                    return $this->database;
                }
            }catch(\Exception $err){
                echo $err->getMessage();
            }
        }

    }

    public function dbdisconnect()
    {
        if($this->database != null){
            $this->database = null;
        }
    }

    public function fetchdata($table, $id)
    {
        $stmt = $this->database->prepare("SELECT * FROM ".$table." WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $result = $stmt->execute();

        if($result){
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }else{
            return null;
        }
    }
}

$obj = new class_db("localhost", "dbone", "root", "");
//var_dump($obj->dbconnect());


$obj->dbconnect();
$user = $obj->fetchdata("users",42);


if($user != null){
    var_dump($user);

    echo $user[0]->email;
}
?>