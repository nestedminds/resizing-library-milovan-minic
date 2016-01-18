<?php

/**
 * task 006 Array - sort the array
 *
 * Create the array that accept only integer and double like in previous task. Sort the array values in ascending order.
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

// Sort numeric array
sort($numeric);

// Printout sorted array
print_r($numeric);
