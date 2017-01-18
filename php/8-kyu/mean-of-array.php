<?php

    function get_average($a) {
        return intval(array_sum($a) / count($a));
    }

    echo get_average([2, 2, 2, 2]);
    echo "<br>";
    echo get_average([1, 2, 3, 4, 5]);
    echo "<br>";
    echo get_average([1, 1, 1, 1, 1, 1, 1, 2]);
    echo "<br>";

 ?>
