<?php

include "seta2.inc";
$txt1 = $_GET['txt1'];
$op = $_GET['op'];

if($op == 'callength')
	echo "Length of Given String is".$op($txt1);

?>
