<?php

  function countPositivesSumNegatives($input) {
    if (count($input) == 0) {
      return $input;
    } else {
      foreach ($input as $number) {
        if($number < 0) {
          $negatives += $number;
        } elseif ($number > 0) {
          $positives += 1;
        }
      }
      $output = array($positives, $negatives);
      return $output;
    }
  }

  $input = array();
  print_r(countPositivesSumNegatives($input));

?>
