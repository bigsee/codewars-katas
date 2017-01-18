<?php

    function decodeResistorColors($bands) {
        $bands = explode(' ', $bands);
        $digit = ["black" => 0, "brown" => 1, "red" => 2, "orange" => 3,
                  "yellow" => 4, "green" => 5, "blue" => 6, "violet" => 7,
                  "gray" => 8, "white" => 9];
        $resistance = intval($digit[$bands[0]].$digit[$bands[1]]) * pow(10, $digit[$bands[2]]);
        if ($resistance >= 1000 && $resistance < 1000000) {
            $resistance = ($resistance/1000)."k ohms";
        } elseif ($resistance >= 1000000) {
            $resistance = ($resistance/1000000)."M ohms";
        } else {
          $resistance = $resistance." ohms";
        }

        /*
        switch ($bands[3]) {
          case 'gold':
            $tolerance = "5%";
            break;
          case 'silver':
            $tolerance = "10%";
            break;
          default:
            $tolerance = "20%";
            break;
        }
        */

        if (array_key_exists(3, $bands)) {
          switch ($bands[3]) {
            case 'gold':
              $tolerance = "5%";
              break;
            case 'silver':
              $tolerance = "10%";
              break;
          }
        } else {
          $tolerance = "20%";
        }

        return $resistance.", ".$tolerance;
    }

    echo decodeResistorColors("yellow violet black");
    echo "<br>";
    echo decodeResistorColors("yellow violet red gold");
    echo "<br>";
    echo decodeResistorColors("brown black green silver");
    echo "<br>";

 ?>
