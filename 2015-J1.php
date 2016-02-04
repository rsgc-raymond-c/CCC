<?php

// Open standard input
$f = fopen("php://stdin","r");   // open our file pointer to read from stdin

// Get the month
$month = fgets($f);

// Get the day
$day = fgets($f);

// Close standard input
fclose($f);                   

// The special day is Feburary 18.
// Expressed purely in days, this is 31 days (for January) and 18 days (from February).
$specialDay = 31 + 18;

// Express the provided month and day purely in days.
// Since we know January has 31 days, and we only care about checking for the special day,
// it doesn't matter that other months have less than 31 days.
$providedDay = ($month - 1) * 31 + $day;

// Now check whether this is the special day.
// By converting the input given to days alone, this simplifies the conditional statement
// (there is no need for boolean operators).
if ($providedDay == $specialDay) {

    print("Special\n");
    
} else if ($providedDay < $specialDay) {
    
    print("Before\n");
    
} else {
    
    print("After\n");

}

?>