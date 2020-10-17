

<?php

  function Power($x, $n) {
    $finalnum = 1;
    $n1 = $n;
    while($n1 > 0){
      $finalnum = $finalnum * $x;
      $n1--;
    }
    echo "$x raised to the power $n = $finalnum \n";
  }

  Power(3, 5);
  Power(5, 0);
  Power(6, 2);

?>