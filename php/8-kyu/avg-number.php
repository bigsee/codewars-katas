<?php

  function find_average($array) {
    return array_sum($array) / count($array);
  }

  $number_list = array(2, 4, 6, 8);
  echo find_average($number_list);
?>
