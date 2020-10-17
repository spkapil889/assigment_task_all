<!-- Wap to split into digits in php -->

<?php

function split($number){
$myArray = str_split($number);

echo "the numer was $number </br> after spliting:</br>";
foreach ($myArray as $key => $value) {
	echo "the $key place is $value</br>";}	
};

split(46468647);
?>




