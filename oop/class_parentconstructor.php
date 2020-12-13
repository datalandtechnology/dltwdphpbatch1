<?php
class class_parentconstructor{
    public $username="koko";
    public $email = "koko@gmail.com";
    public $password = "123456";

    public function __construct(){
        echo "i am start working from parent";
        echo "<br/>";
    }
}

class class_child1 extends class_parentconstructor{

}

class class_child2 extends class_parentconstructor{

    //Method Overwriting - Parent Method OV
    public function __construct(){
        parent::__construct();
        echo "i am start working from child2";
    }

}

echo "This is Parent Constructor and Child 2 Constructor ". "<br/>";
$obj = new class_child2();
echo "<hr/>"
?>