<?php
//require_once "admin/class_admin.php";
//require_once "auth/class_auth.php";

require_once "vendor/autoload.php";

class index{

    public function __construct(){


        $admin = new class_admin();


        $auth = new class_auth("aungaung",123456);
        $auth->accessinfo();

        $migration = new class_migration();
    }

}

$obj = new index();


?>