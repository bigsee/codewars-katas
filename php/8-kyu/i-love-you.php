<?php

/*
// using a switch case

function how_much_i_love_you($nb_petals) {
  // Your code here
  while($nb_petals > 6) {
    $nb_petals -= 6;
  }

  switch ($nb_petals) {
    case 1:
      return "I love you";
      break;
    case 2:
        return "a little";
        break;
    case 3:
      return "a lot";
      break;
    case 4:
      return "passionately";
      break;
    case 5:
      return "madly";
      break;
    case 6:
      return "not at all";
      break;
    default:
      # code...
      return "Error - couldn't count the petals";
      break;
  }
}

*/

// using an Array

function how_much_i_love_you($nb_petals) {

  $statements = Array('I love you', 'a little', 'a lot', 'passionately', 'madly', 'not at all');
  while($nb_petals > 6) {
    $nb_petals -= 6;
  }
  return $statements[$nb_petals - 1];
}


echo how_much_i_love_you(7);
echo "<br>";
echo how_much_i_love_you(3);
echo "<br>";
echo how_much_i_love_you(6);
echo "<br>";

?>
