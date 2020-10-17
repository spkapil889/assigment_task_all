asgmnt5.php
</br>
<?php 

//height and base
$height=30;
$base=15;

//area
function areaofTraingle($height,$base){
	$area = ($base*$height)/2;
	echo "height $height <br/> base: $base </br> areaofTraingle:$area";
}

areaofTraingle($height,$base);

 ?>