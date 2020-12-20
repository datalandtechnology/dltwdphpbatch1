<?php
class class_staticmodifier{
    //Static property
    public static $i = 0;
    public static $name= "Ko Ko";

    //Non-static property
    public $address = "Mandalay";

    //Static Method
    //( Static method can not use Non-static property )
    //( Static method can not use Non-static method )
    public static function myfun(){
        echo "i am static method my fun"."<br/>";
        echo "my name is ". self::$name;
//        echo "my address is = ". $this->address; // Result error

//        mynonstfun(); //Result Error
    }


    //Non-static Method
    // (Non-static method = static property and non-static property can call)
    // (Non-static method = static method and non-static method can call)
    public function mynonstfun(){
        echo "i am non-static method ". "<br/>";

        echo "my getting value is = ". self::$i . "<br/>";

        echo "my address is = ". $this->address . "<br/>";

//        self::myfun();

    }


    public function getinc(){
//        $this->i++;
//       echo $this->i ."<br/>";

        self::$i++;
        echo self::$i . "<br/>";



    }






}

echo "This is static modifier "."<br/>";
$obj = new class_staticmodifier();
//echo $obj->address; //Calling Non-static property
//echo $obj::$i; //Calling static property


//$obj->myfun(); //Calling non-static method
//$obj::myfun(); //Calling static method


//echo class_staticmodifier::$i; //calling static property
//class_staticmodifier::myfun(); //calling static method

//$obj->mynonstfun();



$obj->getinc();
$obj->getinc();
$obj->getinc();
$obj->getinc();


$jbo = new class_staticmodifier();
$jbo->getinc();
$jbo->getinc();
$jbo->getinc();
$jbo->getinc();

echo "<hr/>";
?>