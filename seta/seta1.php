<?php

$n1 = _GET['n1'];
$n2 = _GET['n2'];
$menu = _GET['menu'];

function mod($n1,$n2){
	$mod = $n1 % $n2;
	return $mod;
}

function power($n1,$n2){
	$power = $pow($n1,$n2);
	return $power;
}

function sum($n1){
	$sum = 0;
	for($i = 0 ; $i < $n1 ; $i++){
		$sum += $i;
	}
	return $sum;
}

function fact($n2){
	$fact = 1;
	for( $i=0; $i <$n2 ; $i++){
	$fact *= $i;
	}
	return $fact;
}

if($menu == "mod"){
	echo "Mod of Two Numbers :" .mod($n1,$n2);
}
elseif($menu == "power"){
	echo "Power of Two Numbers :" .power($n1,$n2);
}
elseif($menu == "sum"){
	echo "Sum of Two Numbers :" .sum($n1);
}
else($menu == "sum"){
	echo "Factorial of Two Numbers :" .fact($n2);
}

?>
