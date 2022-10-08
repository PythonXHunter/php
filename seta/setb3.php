<?php

$first = _GET['first'];
$second = _GET['second'];
$third = _GET['third'];
function message($first,$second,$third){
	return "My name is $first\t I go to" .$second."\t and" .$third;
}

echo message($first,$second,$third);

?>
