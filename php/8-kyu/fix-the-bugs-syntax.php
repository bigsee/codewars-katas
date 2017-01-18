<?php

    /* bugs fixed in original

    function my_first_kata($a, $b) {
          if ((!is_int($a) && !is_float($a)) || (!is_int($b) && !is_float($b))) {
            return false;
          } else {
            return ($a % $b) + ($b % $a);
          }
        }

    */

    // extension --> my own version

    function my_first_kata($a, $b) {
      return is_numeric($a) && is_numeric($b) ? ($a % $b) + ($b % $a) : false;
    }


    echo my_first_kata(3, 5);
    echo "<br>";
    echo my_first_kata("hello", 3);
    echo "<br>";
    echo my_first_kata(67, "bye");
    echo "<br>";
    echo my_first_kata(true, true);
    echo "<br>";
    echo my_first_kata(314, 107);
    echo "<br>";
    echo my_first_kata(19483, 9);
    echo "<br>";



 ?>
