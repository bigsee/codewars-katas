<?php

    function calculator($a, $b, $sign) {
        if (is_string($a) || is_string($b)) {
          return "unknown value";
        } else {
          return (filter_var($a, FILTER_VALIDATE_FLOAT) && filter_var($b, FILTER_VALIDATE_FLOAT) && in_array($sign, ['+', '-', '/', '*'], TRUE)) ? eval("return $a $sign $b;") : 'unknown value';
        }
    }

    echo calculator(1, 2, "+");
    echo "<br>";
    echo calculator(1, 2, "-");
    echo "<br>";
    echo calculator(3, 5, "*");
    echo "<br>";
    echo calculator(6, "2.03242342", "/");
    echo "<br>";
    echo calculator(6, 2, "$");
    echo "<br>";
    echo calculator(6, "h", "*");
    echo "<br>";
 ?>
