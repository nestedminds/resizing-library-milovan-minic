<?php

/**
 * task 004 - Array - reverse array
 *
 * Create the array like in previous task. Reverse the array values and output array on the screen.
 */

echo "Enter values separated by comma: " . PHP_EOL;

// Get values from console input
$input = fgets(STDIN);

// Parse input and place values into array
$elements = explode(",", $input);

// Trims all white characters within element
array_walk($elements, function (&$val) {
    $val = trim($val);
});

// Printout original order of elements
print_r($elements);

// Reverse array elements
$reversed = array_reverse($elements);

// Printout reversed order of elements
print_r($reversed);
