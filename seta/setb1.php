<?php

$s1 = $_GET['large'];
$s2 = $_GET['small'];
$op = $_GET['op'];

switch($op){
	case 1:
	if(stripos($s1,$s2) ===0){
		echo "The String at $s1 is Starts with the $s2 String";
	}
	else{
		echo "The String at $s1 is not Starts with the $s2 String";	
	}
	break;
	
	case 2:
	if($pos=strpos($s1,$s2));
		if($pos ===false){
			echo "The String $s2 is not present in $s1<br>";
		}
		else{
			echo "The String $s2 is present in $s1 at the position $pos <br>"; 
		}
	break;
		
	case 3: $ans = strncasecmp($s2,$s1,3);
		if($ans==0){
			echo "The $s1 and $s2 has first 3 Letters are Same<br>";
		}
		else{
			echo "The $s1 and $s2 does not Have the First 3 Letters same";
		}
	break;
}

?>
