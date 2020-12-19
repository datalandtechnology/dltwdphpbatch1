<?php
class datatypecasting{

    public function typecastingbyint(int $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbystring(string $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbybool(bool $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbyarray(array $req){
        echo "<pre>".print_r($req,true)."</pre>";
        var_dump($req);
    }
}

$obj = new datatypecasting();

//$obj->typecastingbyint(40.9);
//$obj->typecastingbyint("aung aung");
//$obj->typecastingbyint(NULL);
//$obj->typecastingbyint(FALSE);


//$obj->typecastingbystring(40.9);
//$obj->typecastingbystring("aung aung");
//$obj->typecastingbystring(NULL);
//$obj->typecastingbystring(FALSE);


//$obj->typecastingbybool(40.9);
//$obj->typecastingbybool("a");
//$obj->typecastingbybool(NULL);
//$obj->typecastingbybool(TRUE);

//$obj->typecastingbyarray(40.9);
//$obj->typecastingbyarray("a");
//$obj->typecastingbyarray(["aung","Kyaw"]);

echo "<hr/>";
?>