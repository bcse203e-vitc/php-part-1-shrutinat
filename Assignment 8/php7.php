<?php
$array = [1, 2, 3, 4, 5];

echo "Original array :\n";
echo implode(" ", $array) . "\n";

array_splice($array, 3, 0, '$');

echo "After inserting '$' the array is :\n";
echo implode(" ", $array) . "\n";
?>
