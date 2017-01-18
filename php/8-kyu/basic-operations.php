<?php

    function basicOp($op, $val1, $val2)
    {
        // dangerous, but quicker than a switch case for this kata
        return eval("return $val1 $op $val2;");
    }

    echo basicOp('+', 4, 7);
    echo "<br>";
    echo basicOp('-', 15, 18);
    echo "<br>";
    echo basicOp('*', 5, 5);
    echo "<br>";
    echo basicOp('/', 49, 7);
    echo "<br>";

 ?>
