<?php

    function countDays($d) {
        $days = date_diff($d, date_create('today'));
        if ($d < date_create('today')) {
          return "The day is in the past!";
        } elseif ($days->format('%d') == 0) {
          return 'Today is the day!';
        } else {
          $message = $days->format('%d');
          return $message." days";
        }
    }

    //print_r(date_create('now'));

    echo countDays(date_create('2017-01-03'));
    echo "<br>";
    echo countDays(date_create('2017-01-14'));
    echo "<br>";
    echo countDays(date_create('2017-01-08'));
    echo "<br>";

?>
