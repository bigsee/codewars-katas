<?php

    function mouth_size($animal) {
        return strtolower($animal) === 'alligator' ? 'small' : 'wide';
    }

    echo mouth_size('toucan');
    echo "<br>";
    echo mouth_size('ant bear');
    echo "<br>";
    echo mouth_size('alligator');
    echo "<br>";
    echo mouth_size('Tiger');
    echo "<br>";
    echo mouth_size('Alligator');
    echo "<br>";

 ?>
