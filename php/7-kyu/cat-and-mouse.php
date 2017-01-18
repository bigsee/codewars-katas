<?php

    function cat_mouse($s) {
        return stripos($s, "m") - stripos($s, "c") >= 5 ? "Escaped!" : "Caught!";
    }

    echo cat_mouse("C....m");
    echo "<br>";
    echo cat_mouse("C..m");
    echo "<br>";
    echo cat_mouse("C...m");
    echo "<br>";
    echo cat_mouse("C.........m");
    echo "<br>";
    echo cat_mouse("Cm");
    echo "<br>";

 ?>
