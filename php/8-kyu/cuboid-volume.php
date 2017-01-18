<?php

  function get_volume_of_cuboid($length, $width, $height) {
    return ($length * $width * $height);
  }

  echo get_volume_of_cuboid(6.3, 2, 5);
  echo "<br>";
  echo get_volume_of_cuboid(1, 2, 2);
 ?>
