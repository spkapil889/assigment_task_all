<!-- WAP to test number postive or Negative  -->
<?php
//define numbers 
$number1=12;
$number2=-15;


//check numbers function
function checkNumber($n){
	if($n>0){
		echo "this number $n is postive";
	}else if($n<0){
		echo "this number $n is negative";
	}else{
		echo "the number is 0";
	}
}

checkNumber(12);

?>


