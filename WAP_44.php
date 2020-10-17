<!-- wap to cout a nagativge number  -->
<?php

   //count negative elements in array;

    $arr = [2,-4,-10,-3,7,9,-12];
    $totalNegative =0;
    $elements=[];

    for ($i=0; $i <count($arr); $i++) { 
    	if($arr[$i]<0){
    	array_push($elements, $arr[$i]); //push method is used to push negative elements in array
    	$totalNegative++;
    	}
    }

    echo "total negative elements in array are $totalNegative ";
    echo "negative elements are </br> ";
    foreach ($elements as $value) {
    	echo "$value ,";
    }
?>
