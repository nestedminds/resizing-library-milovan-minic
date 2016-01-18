<?php

/**
 * task 003 - Array - most frequent element
 *
 * Create the array by reading user inputs on the screen. User will enter array values by separating them with commas.
 *
 * Than find the most frequent element and output in on the screen.
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

// Count occurrence for every array element
$elementOccurrences = array_count_values($elements);

// Sort an array
arsort($elementOccurrences);

// Get the most typed value
$mostFrequent = key($elementOccurrences);

echo 'The most frequent element is: ' . $mostFrequent;
