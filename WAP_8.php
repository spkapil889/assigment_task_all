<!-- Wap find a largest number among a two value  -->
</br>
<?php 

//numbers
$numbers = array(10,20,-50,200);

//funtion to find largest
function findLargest($numbers){
	$largestNumber = max($numbers);
	echo implode(', ', $numbers);
	echo "</br>";
	echo "largest Number in the array is $largestNumber";
};

findLargest($numbers);

  ?> 