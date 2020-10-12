<?php

$goback="<a href=\"smallproject.php\">Go Back</a>";

if(isset($_POST['submit'])){

    $mark = $_POST['mark'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        
        if($mark < 0){

            echo "Null";
            }elseif($mark <= 39){

                echo "Failed" . "<br/> <br/>";
                echo $goback;

            }elseif($mark >= 40 && $mark <=79){
            echo "Passed" . "<br/> <br/>";
            echo $goback;
            }elseif($mark >=80 && $mark <=100){
            echo "Distinction" . "<br/> <br/>";
            echo $goback;
            }else{
                echo "System Error" . "<br/> <br/>";
                echo $goback;
            }

        }

}


?>