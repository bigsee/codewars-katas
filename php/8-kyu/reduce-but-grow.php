<?php

    function grow($a) {
        return array_reduce($a, function(&$res, $a) { return $res * $a; }, 1);
    }

    echo grow([1, 2, 3]);
    echo "<br>";
    echo grow([4, 1, 1, 1, 4]);
    echo "<br>";
    echo grow([2, 2, 2, 2, 2, 2]);
    echo "<br>";

 ?>
