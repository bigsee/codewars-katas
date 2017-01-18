<?php

    function shortenToDate($longDate) {
        //return strtotime($longDate);
        //return $longDate;
        $date = DateTime::createFromFormat("l F j \, ha", $longDate);
        return $date;
        //return date_format(date_create_from_format('l F j \, ha', $longDate), "l F j");
    }

print_r(shortenToDate("Friday May 5, 9am"));
echo "<br>";
print_r(shortenToDate("Tuesday January 29, 10pm"));
echo "<br>";
print_r(shortenToDate("Monday December 25, 10pm"));


 ?>
