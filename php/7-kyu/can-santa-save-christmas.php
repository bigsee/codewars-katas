<?php

    function determineTime($durations) {
        $total_seconds = 0;
        foreach($durations as $time) {
          $time = explode(':', $time);
          $hours = $time[0];
          $minutes = $time[1];
          $seconds = $time[2];
          $total_seconds += $hours * 3600;
          $total_seconds += $minutes * 60;
          $total_seconds += $seconds;
        }
        return 86400 >= $total_seconds ? true : false;
    }

    echo determineTime(["12:00:00", "06:00:00"]);
    echo "<br>";
    echo determineTime(["12:00:00", "06:00:00", "06:00:00"]);
    echo "<br>";
    echo determineTime(["12:00:00", "06:45:00", "08:00:00"]);
 ?>
