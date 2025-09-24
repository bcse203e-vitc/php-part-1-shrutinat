<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$merged_array = array();

foreach ($array1 as $key => $sub_array) {
    $merged_array[] = array_merge(array($array2[$key]), $sub_array);
}

print_r($merged_array);
?>
