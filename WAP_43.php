<!-- Wap to find all even odd number  -->
<?php 

    $arr = [2,4,10,3,7,9,12];
    $even = 0;
    $odd = 0;
    // find even and odd from function 
    	for ($i=0; $i <count($arr) ; $i++) 
    	{ 
    		if($arr[$i]%2==0){
    			$even++;
    		}else{
    			$odd++;
    		}
    	}
    	echo "number of even elements in array  is $even</br>";
    	echo " number of odd elements in array is $odd";
?>
