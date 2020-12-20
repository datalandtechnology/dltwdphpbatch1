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

    //This is created by me for array print
    public function beautyprint(){
        echo "<pre>".print_r($this->cars,true)."</pre>";
        echo "<br/>";
        echo "So today i bought ". $this->cars[2];
    }


    public function madeinjapan($cars){
        $this->cars = $cars;
    }
}

$arruscars = ["Ford","Chrysler","Chevrolet","Hummer","Lincoln","Jeep","GMC"];
$arrjpcars = ["Toyota","Nissan","Suzuki","Mazda","Hino"];


$obj = new index();
echo "This is US cars"."<br/>";
$obj->madeinus($arruscars);
$obj->beautyprint();
echo "<hr/>";
echo "This is Japan cars";
$obj->madeinjapan($arrjpcars);
$obj->beautyprint();


echo "<hr/>";



require_once "anonymousfunction.php";
require_once "arraywalk.php";
require_once "datatypechecking.php";
require_once "datatypecasting.php";
require_once "objectcasting.php";
require_once "returndatatype.php";
require_once "class_magicgetandset.php";



require_once "serializeandunserialize.php";
require_once "class_magicsleepandwakeup.php";
require_once "class_staticmodifier.php";
require_once "class_magicissetandunset.php";
require_once "class_magiccallandcallstatic.php";