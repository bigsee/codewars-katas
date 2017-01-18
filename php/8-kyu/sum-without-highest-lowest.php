<?php

  function sumArray($array) {
    sort($array);
    return array_sum(array_slice($array, 1, count($array)-2));
  }

  /*
  // one line variation

  function sumArray($array) {
    return array_sum($array)-max($array)-min($array);
  }

  */
print_r(sumArray([6, 2, 1, 8, 10]));

 ?>
