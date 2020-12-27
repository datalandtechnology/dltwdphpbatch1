<?php
class class_auth
{
    private $username;
    private $password;

    public function __construct($user, $pass)
    {
        $this->username = $user;
        $this->password = $pass;
    }

    public function accessinfo()
    {
        echo "Username is  = " . $this->username . " and Password is = " . $this->password . "<br/>";
    }
}

?>