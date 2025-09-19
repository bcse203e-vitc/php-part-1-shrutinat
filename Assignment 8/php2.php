<!DOCTYPE html>
<html>

<body>
<?php
$color = array('white', 'green', 'red');


echo implode(', ', $color) . ",<br>";


for ($i = 1; $i < count($color); $i++) {
    echo "• " . $color[$i] . "<br>";
}
echo "• " . $color[0] . "<br>";
?>
</body>
</html>