<?php

// Create a sample array
$fruits = ["apple", "banana", "orange", "mango", "pineapple"];

// Get the first element
$firstElement = $fruits[0];
echo "First element: $firstElement\n";

// Get the last element
$lastElement = $fruits[count($fruits) - 1];
echo "Last element: $lastElement\n";

// Remove the middle element (assuming even number of elements)
$middleIndex = (int) floor(count($fruits) / 2);
array_splice($fruits, $middleIndex, 1);

echo "Array after removing middle element: \n";
print_r($fruits);  // Use print_r for a more readable array output

// Push a new element to the array
array_push($fruits, "grapefruit");

echo "Array after pushing grapefruit: \n";
print_r($fruits);

?>