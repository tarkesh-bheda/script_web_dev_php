<?php
//script 38 to shift and unshift the elements in array using array_shift() & array_unshift().

$Name=array("kuldip","John","Vijay","tarkesh");
print_r(array_shift($Name));

echo "<br/>";
array_unshift($Name,"Ajay");
print_r($Name); 
?>