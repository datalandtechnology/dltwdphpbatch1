<?php

$val="th";

switch ($val) {
    case "mm":
        echo "Your input key is ".$val . " meaning is Myanmar";
    break;

    case "th":
        echo "Your input key is ".$val . " meaning is Thailand";
    break;

    case "indo":
        echo "Your input key is ".$val . " meaning is Indonesia";
        break;

    default:
    echo "Your input key is ".$val . " system not found";
}

$num="10";

switch ($num) {
    case 10:
        echo "Your input key is ".$num . " Ten";
    break;

    case 20:
        echo "Your input key is ".$num . " tweenty";
    break;

    case 30:
        echo "Your input key is ".$num . " thirty";
        break;

    default:
    echo "Your input key is ".$num . " system not found";
}


?>