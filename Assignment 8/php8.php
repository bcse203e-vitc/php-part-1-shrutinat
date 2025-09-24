<?php
$array = array(
    "Sophia" => "31",
    "Jacob" => "41",
    "William" => "39",
    "Ramesh" => "40"
);

asort($array);
echo "Ascending order sort by value:\n";
print_r($array);

ksort($array);
echo "\nAscending order sort by key:\n";
print_r($array);

arsort($array);
echo "\nDescending order sort by value:\n";
print_r($array);

krsort($array);
echo "\nDescending order sort by key:\n";
print_r($array);
?>
