<?php
//script 44 to extract values from associative array using array_values().
 
$Name=array("Mca"=>"mihir","Mba"=>"John","Msc"=>"vijay","Bca"=>"tarkesh");

$value=array_values($Name); 
print_r($value);

?>