<?php

$op = $_GET['op'];
$arr = array("Aryan","Aditya","Aman","Aamir");
switch($op)
{
case "a":
echo "Stack<br>";
echo "Elements before push<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
array_push($arr,"adi");
echo "Elements After push<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
break;
case "b":
echo "Stack<br>";
echo "Elements before pop<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
array_pop($arr);
echo "Elements After pop<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
break;
case "c":
echo "Stack<br>";
echo "Display<br>";
foreach($arr as $a)
{
echo "$a <br>";
}

break;
case "d":
echo "Stack<br>";
echo "Elements before shift<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
array_shift($arr);
echo "Elements After shift<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
break;
case "e":
echo "Stack<br>";
echo "Elements before unshift<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
array_unshift($arr,"adi");
echo "Elements After unshift<br>";
foreach($arr as $a)
{
echo "$a <br>";
}
break;
case "f":
echo "Stack<br>";
echo "Display<br>";
foreach($arr as $a)
{
echo "$a <br>";
}

default:
echo "Please choose the correct Option";
}

?>
