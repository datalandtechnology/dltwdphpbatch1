<?php
function mycoal(...$var){
    echo $var[0] ?? "You are tyring to print out without argument sir";
}
echo "This is coalesce function". "<br/>";
mycoal();

echo "<hr/>";

?>