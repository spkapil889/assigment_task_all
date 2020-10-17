<!-- wap to marge two array to third array  -->
<?php 

$arr1=[1,2,5,8];
$arr2=[10,15,16,25];
$arr3=[10001,45648,151865];

function combineArray($ar1,$ar2,$ar3){
	return $finalArr=array_merge_recursive($ar1,$ar2,$ar3);
}

$finalArr = combineArray($arr1,$arr2,$arr3);

echo implode(', ', $finalArr);

 ?>