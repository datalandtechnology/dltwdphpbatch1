<?php
class class_magicsleepandwakeup{

    public function __sleep(){
        echo "Sir you are trying to serialize for object ". "<br/>";
        return [];
    }

    public function __wakeup(){
        echo "Sir you are trying to unserialize for object"."<br/>";
    }

}

echo "This is Magic Method sleep and wakeup"."<br/>";
$obj = new class_magicsleepandwakeup();

$slz = serialize($obj);

unserialize($slz);

echo "<hr/>";
?>