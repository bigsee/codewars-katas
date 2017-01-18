<?php

  function howManyLightsabersDoYouOwn($name) {
      return $name === 'Zach' ? 18 : 0;
  }

  echo howManyLightsabersDoYouOwn('Zach');
  echo "<br>";
  echo howManyLightsabersDoYouOwn('Jack');
  echo "<br>";
  echo howManyLightsabersDoYouOwn();

 ?>
