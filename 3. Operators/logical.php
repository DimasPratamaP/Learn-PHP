<?php
$year = 2020;

if (($year % 100 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year";
}else{
    echo "$year is not a leap year";
}

?>