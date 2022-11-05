<?php

$var = array('1','2','3','4','5');
foreach ($var as $arr)
{
	echo "$arr<br>";
}
print_r($var);
$ad = 'aryan';
array_splice($var,3,2,$ad);
echo "<br>";
foreach ($var as $arr)
{
	echo "$arr<br>";
}
?>
