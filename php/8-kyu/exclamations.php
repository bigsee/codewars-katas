<?php

// remove exclamation marks from end of string
function remove($s){
    return rtrim($s, "!");
}

$results = remove('!!!SAdsa!!!daad!!!');
echo $results;

?>
