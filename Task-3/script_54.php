<?php
//// Script 54 extracts specific column from multidimensional array using the array_column() function.
$array1= array(array("Name"=>"mihir","Age"=>21,"course"=>"MCA"),
array("Name"=>"John","Age"=>25,"course"=>"MBA"));
print_r(array_column($array1,"Name"));
?>