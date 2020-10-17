<!-- wap to Leap year -->
<?php 

$num1=2015;
$num2=2018;

function checkLeap($a){
	print($a%4==0)?"$a is leap year":"$a is not a leap year";
}
 checkLeap($num2);
 ?>