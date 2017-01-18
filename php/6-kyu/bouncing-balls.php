<?php

  function bouncingBall($h, $bounce, $window) {

      $views = 1;

      if ($h * $bounce < $window) {
          $views = -1;
      } else {
          while ($h * $bounce > $window) {
              $views += 2;
              $h = $h * $bounce;
          }
      }

      return $views;
  }

echo bouncingBall(3.0, 0.66, 1.5);
echo "<br>";
echo bouncingBall(30.0, 0.66, 1.5);
echo "<br>";
echo bouncingBall(10, 0.6, 10);
echo "<br>";

 ?>
