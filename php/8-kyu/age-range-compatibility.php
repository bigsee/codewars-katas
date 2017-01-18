<?php

    function datingRange($age) {
        return $age <= 14 ? floor($age - (0.10 * $age))."-".floor($age + (0.10 * $age)) : floor(($age/2) + 7)."-".floor(($age-7)*2);
    }

    echo datingRange(17);
    echo "<br>";
    echo datingRange(40);
    echo "<br>";
    echo datingRange(15);
    echo "<br>";
    echo datingRange(35);
    echo "<br>";
    echo datingRange(10);
    echo "<br>";

 ?>
