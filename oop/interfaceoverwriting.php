<?php
interface role{
    public function createrole();
    public function readrole($id);
    public function updaterole($id,$request);
    public function deleterole($id);
}

class startrole implements role{

    private $id;
    private $request;

    public function createrole(){
        echo "i am from create role ". "<br/>";
    }

    public function readrole($id){
        $this->id = $id;
        echo "i am from read role and i have to read record id = ". $this->id . "<br/>";
    }

    public function updaterole($id, $request){
        $this->id = $id;
        $this->request = $request;
        echo "i am from update role and i have to update record id = ". $this->id . "And my request data is ". $this->request.  "</br>";
    }

    public function deleterole($id){
        $this->id = $id;
        echo "i am from delete role and i have to update record id = ". $this->id . "</br>";

    }
}

$obj = new startrole();
$obj->createrole();
$obj->readrole(10);
$obj->updaterole(20,"aung aung");
$obj->deleterole(30);
echo "<hr/>";
?>