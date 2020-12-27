<?php
//require_once "admin/class_admin.php";
//require_once "auth/class_auth.php";

require_once "autoload/autoload.php";

class index{

    public function __construct(){

        autoload::myload("admin/class_admin");
        $admin = new class_admin();

        autoload::myload("auth/class_auth");
        $auth = new class_auth("aungaung",123456);
        $auth->accessinfo();
    }

}

$obj = new index();


?>