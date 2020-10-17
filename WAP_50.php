
<?php

   //Count unique elements in arraay

    function countDuplicate($arr){
		$res=0;
		$newArr=array_count_values($arr);
		foreach ($newArr as $key => $value){
			if($value>=2){
				 $res++;
			}
		} 
		return $res;
    }

    $arr = [10,20,30,30,10,20,20,20];
    $fRes = countDuplicate($arr);

    // $fDuplicate = $duplicate;
    // $fRes = $res;

    echo "duplicate elements in array are $fRes ";
    // print_r($fDuplicate);


?>