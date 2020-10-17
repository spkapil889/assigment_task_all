<!-- WAP to count a number  of digits in a number  -->
<?php
//define numbers 
$num2  = 54;


function countDigit($num){
$myArray = str_split($num);
$arrLength = count($myArray);
echo "Total digits are $arrLength in number $num";
};

//call function to check
countDigit($num2,$num1);

?>