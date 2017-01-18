<?php

  function duck_duck_goose($players, $goose) {
    return !($goose % count($players)) ? $players[count($players)-1]['name'] : $players[($goose % count($players))-1]['name'];
  }

  echo duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"], ["name" => "Tamara"]], 1);
  echo "<br>";
  echo duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"], ["name" => "Tamara"]], 5);
  echo "<br>";
  echo duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"], ["name" => "Tamara"]], 4);
  echo "<br>";
  echo duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"], ["name" => "Tamara"]], 10);
  echo "<br>";
  echo duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"], ["name" => "Tamara"]], 7);
  echo "<br>";

 ?>
