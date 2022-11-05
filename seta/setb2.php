<?php

$t1 = $_GET['t1'];
$arr = array(1,2,3,4);
foreach($arr as $a)
{
echo "$a";
echo "<br>";
}
if(in_array($t1,$arr))
echo "\n $t1 is present";
else
echo "\n $t1 is not present";

?>
