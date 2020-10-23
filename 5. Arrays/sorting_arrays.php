<?php

$numbers = array(2,4,3,8,20,11,10);
sort($numbers);

$array = count($numbers);
for($x = 0; $x < $array; $x++){
	echo $numbers[$x];
	echo "<br>";
}
?>