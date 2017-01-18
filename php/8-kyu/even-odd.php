<?php

  function even_or_odd($n) {
    return !($n % 2) ? "Even" : "Odd";
  }

  echo even_or_odd(2);
  echo "<br>";
  echo even_or_odd(0);
  echo "<br>";
  echo even_or_odd(7);
  echo "<br>";
  echo even_or_odd(1);
  echo "<br>";

 ?>
