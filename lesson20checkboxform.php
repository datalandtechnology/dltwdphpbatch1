<?php

if(! 3>1){
    echo "can";
}else{
    echo "can't";
}

if(isset($_POST['buy'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $fruits=$_POST["fruit"];

        // var_dump($fruits);

        foreach($fruits as $fruit){
            echo "I bought {$fruit}" . "<br/>";
        }

    }    

    

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Checkbox Form</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<label for="fruit">Fruit Shop</label> <br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="apple" >Apple <br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="orange" >Orange <br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="grapes" >Grapes <br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="mango" >Mango <br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="pineapple" >Pineapple<br/>
<input type="submit" name="buy" id="buy" class="" value="Buy">
</form>
</body>
</html>
