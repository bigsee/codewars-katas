<?php

    function evaporator($content, $evap_per_day, $threshold){
        $days = 0;
        $useful_volume = $content * $threshold * 0.01;

        while ($content >= $useful_volume) {
          $days += 1;
          $content *= 1-($evap_per_day * 0.01);
        }

        return $days;
    }

    echo evaporator(10,10,10);
    echo "<br>";
    echo evaporator(10,10,5);
    echo "<br>";
    echo evaporator(100,5,5);
    echo "<br>";

 ?>
