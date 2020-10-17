<!-- Wap to area of right angle  -->
<?php 

//side of tringle
$side=30;

//area
function areaofrightAngle($side){
	$area = (pow($side,2))/2;
	echo "side $side </br> areaofrightAngle:$area";
};

areaofrightAngle($side);

 ?>