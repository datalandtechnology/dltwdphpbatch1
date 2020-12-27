<?php
function myvd(...$var){

//    $var = ["maung maung","aung aung","zw zaw"];

//    echo $var[1] . "<br/>"; //result = they are my elder brothers

    echo $var[0][1] . "<br/>"; //result = aung aung
}

echo "This is variadic function". "<br/>";
//myvd("maung maung", "aung aung","zaw zaw");

myvd(["maung maung","aung aung","zaw zaw"],"they are my elder brothers","hay");

echo "<hr/>";
?>



