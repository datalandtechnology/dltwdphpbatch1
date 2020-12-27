<?php
class autoload{

    public static function myload($classname){
        require_once $classname . ".php";
    }

}
?>
