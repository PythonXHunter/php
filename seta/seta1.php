<?php

$hig =array(5,45,5,42,71,4,72,4,75,78,45,54,78,54,87,54,87,85,7,45,45,48,45);
$cnt = count($hig);
echo "number of {$cnt}<br>";
$total = 0;
$total = array_sum($hig);
echo "total is $total";
?>
