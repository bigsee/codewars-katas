<?php

    function sequence_sum($begin, $end, $step) {
      $sum = 0;
      if ($begin <= $end) {
         for ($i = $begin; $i <= $end ; $i += $step) {
           $sum += $i;
         }
      }
      return $sum;
    }

    echo sequence_sum(2,6,2);
    echo "<br>";
    echo sequence_sum(1,5,1);
    echo "<br>";
    echo sequence_sum(1,5,3);
    echo "<br>";
    echo sequence_sum(4,1,2);
    echo "<br>";

 ?>
