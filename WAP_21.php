<!-- Wap to calculate the sum of odd number from 1 to 20 -->
<?php 

$total = 0;
$number = 0;
$finalValue=20;
 
while ($number <= $finalValue)
{
    if ($number % 2 == 0)
    {
        $total += $number;
    }
    $number++;
}
 
echo $total;
?>