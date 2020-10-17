<!-- wap to cahk given a palindrome number or not  -->

<?php
//fuction   
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum; ///reverse the input number   
}  
$input = 123321;  
$num = palindrome($input);  
if($input==$num){  //compare if equal that means a p
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
?>  