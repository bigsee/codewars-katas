<?php

    function no_space($s) {
        return str_ireplace([' '], '', $s);
    }

    echo no_space('8 j 8   mBliB8g  imjB8B8  jl  B');
    echo "<br>";
    echo no_space('8 8 Bi fk8h B 8 BB8B B B  B888 c hl8 BhB fd');
    echo "<br>";
    echo no_space('asdasdasdasdasd    asdasd weqweqwe 23121312   343rf34f34    9');
    echo "<br>";


 ?>
