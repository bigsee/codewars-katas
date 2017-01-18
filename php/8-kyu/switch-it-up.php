<?php

  function switch_it_up($number) {

    switch ($number) {
      case '0':
        return "Zero";
        break;
      case '1':
        return "One";
        break;
      case '2':
        return "Two";
        break;
      case '3':
        return "Three";
        break;
      case '4':
        return "Four";
        break;
      case '5':
        return "Five";
        break;
      case '6':
        return "Six";
        break;
      case '7':
        return "Seven";
        break;
      case '8':
        return "Eight";
        break;
      case '9';
        return "Nine";
        break;
      case '10';
        return "Ten";
        break;
      default:
        return "Not a digit between 0 and 9.";
        break;
      }
  }

  echo switch_it_up(1);
  echo "<br>";
  echo switch_it_up(3);
  echo "<br>";
  echo switch_it_up(5);
  echo "<br>";

 ?>
