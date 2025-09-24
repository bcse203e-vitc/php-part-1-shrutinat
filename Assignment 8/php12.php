<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function change_case($array, $case_type) {
    if ($case_type === 'lower') {
        array_walk($array, function(&$value) {
            $value = strtolower($value);
        });
        echo "Values are in lower case.\n";
    } elseif ($case_type === 'upper') {
        array_walk($array, function(&$value) {
            $value = strtoupper($value);
        });
        echo "Values are in upper case.\n";
    }
    print_r($array);
}

change_case($Color, 'lower');
change_case($Color, 'upper');
?>
