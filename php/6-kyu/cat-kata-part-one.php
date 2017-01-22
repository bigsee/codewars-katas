<?php

function cat_safety_checker($yard, $minDistance) {
    $yard_as_dictionary = [];
    $L_row = $L_column = $R_row = $R_column = $M_row = $M_column = null;

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

    //return $M_row.$M_column.$R_row.$R_column;
    //return hypot((max($M_row, $R_row)-min($M_row, $R_row)), (max($M_column, $R_column)-min($M_column, $R_column)));
    //return hypot((max($L_row, $R_row)-min($L_row, $R_row)), (max($L_column, $R_column)-min($L_column, $R_column)));
    //return hypot((max($L_row, $M_row)-min($L_row, $M_row)), (max($L_column, $M_column)-min($L_column, $M_column)));
    //return $L_column;

    if ((isset($R_column) + isset($M_column) + isset($L_column)) < 2) {
      return TRUE;
    } elseif (!isset($M_column)) {
      return hypot((max($L_row, $R_row)-min($L_row, $R_row)), (max($L_column, $R_column)-min($L_column, $R_column))) < $minDistance ? FALSE : TRUE;
    } elseif (!isset($R_column)) {
      return hypot((max($L_row, $M_row)-min($L_row, $M_row)), (max($L_column, $M_column)-min($L_column, $M_column))) < $minDistance ? FALSE : TRUE;
    } elseif (!isset($L_column)) {
      return hypot((max($M_row, $R_row)-min($M_row, $R_row)), (max($M_column, $R_column)-min($M_column, $R_column))) < $minDistance ? FALSE : TRUE;
    } else {
      return hypot((max($L_row, $R_row)-min($L_row, $R_row)), (max($L_column, $R_column)-min($L_column, $R_column))) < $minDistance ||
             hypot((max($L_row, $M_row)-min($L_row, $M_row)), (max($L_column, $M_column)-min($L_column, $M_column))) < $minDistance ||
             hypot((max($M_row, $R_row)-min($M_row, $R_row)), (max($M_column, $R_column)-min($M_column, $R_column))) < $minDistance ? FALSE : TRUE;
    }

}

echo cat_safety_checker(array("------------", "------------", "-----L------", "------------", "------------", "------------"), 10);
echo "<br>";
echo cat_safety_checker(array("------------", "---M--------", "------------", "------------", "-------R----", "------------"), 6);
echo "<br>";
echo cat_safety_checker(array("-----------L", "--R---------", "------------", "------------", "------------", "--M---------"), 4);
echo "<br>";
echo cat_safety_checker(array("--------------------", "-R------------------", "--------------------", "--------------------", "---------M----------", "--------------------", "--------------------", "--------------------", "--------------------", "--------------------"), 5);

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
