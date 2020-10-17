<!-- WAP Largest Number  -->
</br>
<?php 
//numbers in array
$a=10;
$b=20;
$c=30;

//function to check largest number
function Max($a,$b,$c){
	if($a>$b && $a>$c){
		echo " is $a";
	}else if($b>$a && $b>$c){
		echo "is $b";
	}else{
		echo "is $c";
	}
}
echo "largest number between $a, $b, $c";
Max($a,$b,$c);

?> 
