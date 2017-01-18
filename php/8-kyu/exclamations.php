<?php

/*
// remove exclamation marks from end of string
function remove_from_end($s){
    return trim($s, "!");
}

// remove all but one exclamation marks from the end of string
function remove($s){
    return preg_replace("/\!+/", "", $s)."!";
}

// remove all exclamation marks except at end
function remove($s) {

  $i = strlen($s)-1;
  $str = [];

  while($s[$i] === "!") {
    array_push($str, $s[$i]);
    $i--;
  }

  $s = preg_replace("/\!+/", "", $s);
  $s = $s.implode($str);
  return $s;

}
*/

// replace all vowels with exclamation marks
function replace($s) {
    return str_ireplace(['a', 'e', 'i', 'o', 'u'], '!', $s);
}

echo replace('!Hi! Hi!');
echo "<br>";
echo replace('Hi!');
echo "<br>";
echo replace('aeiou');
echo "<br>";
echo replace('ABCDE');
echo "<br>";
echo replace('apache_reset_timeout');

?>
