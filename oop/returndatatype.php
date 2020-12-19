<?php
class returndatatype{
    public function stroutput($req) : string{
        echo "original req". "<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return Output";
        return $req;
    }

    public function intoutput($req) : int{
        echo "original req". "<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return Output";
        return $req;
    }


    public function boloutput($req) : bool{
        echo "original req". "<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return Output";
        return $req;
    }

}

$obj = new returndatatype();
echo "This is Retrun Data Type ". "<br/>";
//$test = $obj->stroutput("aung aung");
//$test = $obj->stroutput(200);
//$test = $obj->stroutput(TRUE);
//var_dump($test);


//$test = $obj->intoutput("aung aung");
//$test = $obj->intoutput(200);
//$test = $obj->intoutput(TRUE);
//var_dump($test);


//$test = $obj->boloutput("aung aung");
//$test = $obj->boloutput(200);
$test = $obj->boloutput(TRUE);
var_dump($test);
echo "<hr/>";

?>