<!-- wap to table 21 -->
<?php 

$num = 21;

function createTable($number){
	echo "Table of $number is: </br>";
	for ($i=$number; $i<=($number*10) ;$i=($i+$number)) { 
	echo "$i </br>";}
}

createTable($num);


 ?>