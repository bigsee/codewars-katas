<?php

  function fake_bin($s) {
    return str_replace([5,6,7,8,9], 1, str_replace([1,2,3,4], 0, $s));
  }

  echo fake_bin('45385593107843568');
  echo "<br>";
  echo fake_bin('509321967506747');
  echo "<br>";
  echo fake_bin('366058562030849490134388085');
  echo "<br>";

 ?>
