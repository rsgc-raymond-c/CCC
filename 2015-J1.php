<?php

// Get the first input value (the month)
$month = read_stdin();

// Get the second input value (the day)
$day = read_stdin();

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
if ($providedDay < $specialDay) {
    
    echo "Before" . PHP_EOL;
    
} else if ($providedDay == $specialDay) {

    echo "Special" . PHP_EOL;
    
} else {
    
    echo "After" . PHP_EOL;

}

// Function to read from the command line
function read_stdin()
{
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}

?>