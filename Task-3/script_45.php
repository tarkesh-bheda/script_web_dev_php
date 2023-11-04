<?php
//script 45 to flip the keys and values of array using array_flip().
 
$Name=array("Mca"=>"mihir","Mba"=>"John","Msc"=>"Vijay","Bca"=>"tarkesh");

$flip=array_flip($Name); 
print_r($flip);

?>