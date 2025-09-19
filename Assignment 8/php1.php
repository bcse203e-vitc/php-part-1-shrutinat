<!DOCTYPE html>
<html>
<body>

<h1>PHP q1</h1>

<?php
$color = array('white', 'green', 'red', 'blue', 'black');

$string = "The memory of that scene for me is like a frame of film forever frozen at that
moment: the red carpet, the green lawn, the white house, the leaden sky. The
new president and his first lady. - Richard M. Nixon";

$string = str_replace('red', $color[2], $string);
$string = str_replace('green', $color[1], $string);
$string = str_replace('white', $color[0], $string);


echo $string;
?>


</body>
</html>