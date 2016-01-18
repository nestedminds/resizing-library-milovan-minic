<?php

/**
 * task 005 - Array - largest in array
 *
 * Create the array on the same way we did so far. This time add validation that array can accept only integer or double.
 *
 * Find the largest element and output his value on the screen.
 */

echo "Enter integer and/or double values separated by comma: " . PHP_EOL;

// Get values from console input
$input = fgets(STDIN);

// Parse input and place values into array
$elements = explode(",", $input);

// Trims all white characters within element
array_walk($elements, function (&$val) {
    $val = trim($val);
});

// Validate values and filter out non numeric values
foreach($elements as $element){
    if(is_numeric($element)){
        $numeric[] = $element;
    }
}

// Reverse order numeric array
rsort($numeric);

// Get and printout largest element of an numeric array
$largest = reset($numeric);
echo 'Largest entered number is: ' . $largest;
