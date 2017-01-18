<?php

function cat_safety_checker($yard, $distance) {
    $yard_as_dictionary = [];
    $L_row = null;
    $L_column = null;
    $R_row = null;
    $R_column = null;
    $M_row = null;
    $M_column = null;

    foreach ($yard as $key => $value) {
      array_push($yard_as_dictionary, array_flip(str_split($value)));
    }

    for ($i=0; $i < count($yard_as_dictionary); $i++) {
      if(array_key_exists("L", $yard_as_dictionary[$i])) {
          $L_row = $i;
          $L_column = $yard_as_dictionary[$i]['L'];
      }
      if(array_key_exists("R", $yard_as_dictionary[$i])) {
          $R_row = $i;
          $R_column = $yard_as_dictionary[$i]['R'];
      }
      if(array_key_exists("M", $yard_as_dictionary[$i])) {
          $M_row = $i;
          $M_column = $yard_as_dictionary[$i]['M'];
      }
    }

    return (hypot((max($L_row, $R_row)-min($L_row, $R_row)), (max($L_column, $R_column)-min($L_column, $R_column))) < $distance ||
        hypot((max($L_row, $M_row)-min($L_row, $M_row)), (max($L_column, $M_column)-min($L_column, $M_column))) < $distance ||
        hypot((max($M_row, $R_row)-min($M_row, $R_row)), (max($M_column, $R_column)-min($M_column, $R_column))) < $distance) ? FALSE : TRUE;

    //return count($yard);
    //return array_values(array_flip($yard_as_dictionary));
    //return $yard_as_dictionary;
    //return in_array("L", $yard_as_dictionary);
    //return array_values($yard_as_dictionary);
    //return array_search("-L----------", $yard);
    //return hypot(3, 4);
    echo cat_safety_checker();

}

//echo cat_safety_checker(array("------------", "------------", "-L----------", "------------", "------------", "------------"), 10);
//print_r(cat_safety_checker(array("------------", "------------", "-L----------", "------------", "------------", "------------"), 10));
print_r(cat_safety_checker(array("-----------L", "--R---------", "------------", "------------", "------------", "--M---------"), 4));

echo "<br>";

/* TEST CASES

class DefaultArgumentsTest extends TestCase {
  public function testExamples() {
    echo "Only one cat is in the yard", "\n";
    $this->assertEquals(TRUE, peacefulYard(array("------------", "------------", "-L----------", "------------", "------------", "------------"), 10));
    echo "There are two cats in the yard, and they are closer than the minimum distance", "\n";
    $this->assertEquals(FALSE, peacefulYard(array("------------", "---M--------", "------------", "------------", "-------R----", "------------"), 6));
    echo "All three cats are in the yard, all further apart than or equal to the minimum distance", "\n";
    $this->assertEquals(TRUE, peacefulYard(array("-----------L", "--R---------", "------------", "------------", "------------", "--M---------"), 4));
  }
}

*/

 ?>
