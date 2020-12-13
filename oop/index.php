<?php
//OOP Concept ( Object Oriented Programming )

//-Defining Class
//-Class inheritance
//-Class Methods
//-Class Properties
//-Instantiating
//-Access Control Modifiers
//-Setters And Getters
//-Constructors
//-Destructor

//Define Class

//class abc{
//    properties
//    methods
//
//}
//
//new abc; // it is invoking class

//$phpdfclasses = get_declared_classes();
//foreach($phpdfclasses as $class){
//    echo $class . "<br/>";
//}



require_once "class_properties.php";
require_once "class_method.php";
require_once "class_accessmodifier.php";
require_once "class_thisvariable.php";
require_once "class_accessencapsulation.php";
require_once "class_updateencapsulation.php";
require_once "class_constructor.php";
require_once "class_destructor.php";

require_once "class_inheritance.php";
require_once "class_parentconstructor.php";
require_once "class_trait.php";
require_once "interface.php";
require_once "interfaceoverwriting.php";

require_once "japaninterface.php";
require_once "uscarinterface.php";
class index implements uscarinterface,japaninterface{

    private $cars;

    public function madeinus($cars){
        $this->cars = $cars;
    }

    public function beautyprint(){
        echo "<pre>".print_r($this->cars,true)."</pre>";
        echo "<br/>";
        echo "So today i bought ". $this->cars[2];
    }


    public function madeinjapan($cars){
        $this->cars = $cars;
    }
}

$arruscars = ["Ford","Chrysler","Chevrolet","Hummer","Lincoln"];
$arrjpcars = ["Toyota","Nissan","Suzuki","Mazda","Hino"];


$obj = new index();
echo "This is US cars"."<br/>";
$obj->madeinus($arruscars);
$obj->beautyprint();
echo "<hr/>";
echo "This is Japan cars";
$obj->madeinjapan($arrjpcars);
$obj->beautyprint();