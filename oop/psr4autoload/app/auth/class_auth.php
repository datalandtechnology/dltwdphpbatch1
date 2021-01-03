<?php
namespace app\auth;

class class_auth{
    private $username;
    private $password;

    public function __construct($user,$pass){
        $this->username = $user;
        $this->password = $pass;
    }

    public function accessinfo(){
        echo "user name is = ". $this->username . " and password is = ". $this->password. "<br/>";
    }
}
?>