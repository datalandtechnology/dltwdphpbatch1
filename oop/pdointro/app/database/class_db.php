<?php
namespace app\database;
class class_db{
    const DB_HOST="localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME ="dbone";

    private $database;

    private static $instance;

    private function __construct(){

//        PDO(mysql:host;dbname,dbuser,dbpass);


            try{
                $this->database = new \PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER,self::DB_PASS);
                $this->database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                if($this->database){
                    echo "Successful Connection". "<br/>";
                }
            }catch(\Exception $err){
                echo $err->getMessage();
            }

    }


    public static function getinstance(){

        if(!self::$instance){
            self::$instance = new class_db();
        }

        return self::$instance;

    }

    public function getdatabase(){
        return $this->database;
    }






}


?>