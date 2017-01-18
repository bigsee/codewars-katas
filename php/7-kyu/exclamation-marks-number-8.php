<?php

    // move all exclamation marks to the end of a sentence
    /*

    function remove($s) {
        $array = str_split($s);
        $s = str_ireplace("!", "", $s);
        foreach ($array as $key => $value) {
          if ($value == "!") {
            $s = $s.$value;
          }
        }
        return $s;
    }
    */

    function remove($s) {
      return str_ireplace("!", "", $s, $count).str_repeat("!", $count);
    }

    echo remove("asdasda!! sadsdad! asdasdsa!1! !!!!!!sdasdasdsa!");

 ?>
