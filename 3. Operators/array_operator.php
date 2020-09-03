<?php
$a = array("a" => "red", "b" => "yellow", "c" => "blue");
$b = array("d" => "orange", "e" => "green", "f" => "pink");

$c = $a+$b;
var_dump($c);
echo "<hr>";
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);
echo "<br>";
var_dump($a!=$b);
echo "<br>";
var_dump($a<>$b);
echo "<br>";
var_dump($a!==$b);

?>