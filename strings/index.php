<?php

// 1. strlen() Determines the length of a string (number of characters).

$message = "Hello, world!";
$length = strlen($message);
echo "The string '$message' is $length characters long.";

// 2. strpos() Finds the first occurrence of a substring within a string.

$text = "This is a string with a needle in a haystack.";
$position = strpos($text, "needle");
if ($position !== false) {
   echo "The substring 'needle' was found at position $position.";
} else {
   echo "The substring 'needle' was not found.";
}

// 3. str_replace() Replaces all occurrences of a substring with another substring within a string.

$original = "Welcome to PHP!";
$replaced = str_replace("PHP", "JavaScript", $original);
echo "Original: $original, Replaced: $replaced";

// 4. strtolower() Converts all characters in a string to lowercase.

$text = "MiXeD CaSe TeXt";
$lowercase = strtolower($text);
echo "Original: $text, Lowercase: $lowercase";

// 5. strtoupper() Converts all characters in a string to uppercase.

$text = "lowercase text";
$uppercase = strtoupper($text);
echo "Original: $text, Uppercase: $uppercase";

// 6. trim() Removes whitespace (spaces, tabs, newlines) from the beginning and end of a string.

$text = "  Trim this string!  ";
$trimmed = trim($text);
echo "Original: '$text', Trimmed: '$trimmed'";

// 7. explode() Splits a string into an array of substrings based on a delimiter.

$csv_data = "name,age,city\nAlice,30,New York\nBob,25,Los Angeles";
$data_array = explode("\n", $csv_data); // Split into lines
$headers = explode(",", $data_array[0]); // Split headers
$alice_data = explode(",", $data_array[1]); // Split Alice's data

echo "Headers: " . implode(", ", $headers) . "\n";
echo "Alice's data: " . implode(", ", $alice_data);

// 8.  implode() Joins the elements of an array into a string using a specified delimiter.

$full_name = implode(" ", array("Alice", "Smith"));
echo "Alice's full name: $full_name";

// 9. substr() Extracts a substring from a string.

$text = "This is a long string.";
$substring = substr($text, 8, 5); // Extract "long "
echo "Original: $text, Substring: '$substring'";

// 10. in_array() Checks if a value exists within an array. 

$fruits = array("apple", "banana", "orange");
$search_fruit = "mango";
if (in_array($search_fruit, $fruits, true)) { // Strict comparison
   echo "$search_fruit is found in the fruits array.\n";
} else {
   echo "$search_fruit is not found in the fruits array.\n";
}