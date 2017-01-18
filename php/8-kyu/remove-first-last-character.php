<?php

  function remove_char($s) {
    return substr($s, 1, -1);
  }

print_r(remove_char('Tester123'));
echo "<br>";
print_r(remove_char('eloquent'));
echo "<br>";
print_r(remove_char('country'));
echo "<br>";
print_r(remove_char('person'));
echo "<br>";
print_r(remove_char('place'));
echo "<br>";

?>
