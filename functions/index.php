<?php

// Declared functions

// 1. Функция для вычисления факториала числа
function factorial($number) {
   if ($number <= 1) {
      return 1;
   }
   return $number * factorial($number - 1);
}

// 2. Функция для вычисления суммы чисел в массиве
function array_sum_custom($array) {
   $sum = 0;
   foreach ($array as $value) {
      $sum += $value;
   }
   return $sum;
}

// 3. Функция для нахождения максимального значения в массиве
function array_max_custom($array) {
   $max = $array[0];
   foreach ($array as $value) {
      if ($value > $max) {
         $max = $value;
      }
   }
   return $max;
}

// 4. Функция для нахождения минимального значения в массиве
function array_min_custom($array) {
   $min = $array[0];
   foreach ($array as $value) {
      if ($value < $min) {
         $min = $value;
      }
   }
   return $min;
}

// 5. Функция для проверки, является ли число четным
function is_even($number) {
   return $number % 2 == 0;
}

// Ananymous function

// Пример массива
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Анонимная функция для фильтрации четных чисел
$evenNumbers = array_filter($numbers, function($number) {
   return $number % 2 == 0;
});

// Анонимная функция для удвоения каждого элемента массива
$doubledNumbers = array_map(function($number) {
    return $number * 2;
}, $numbers);

// Анонимная функция для вычисления суммы квадратов чисел в массиве
$sumOfSquares = array_reduce($numbers, function($carry, $number) {
    return $carry + ($number * $number);
}, 0);

// Вывод результатов
echo "Четные числа: " . implode(", ", $evenNumbers) . "\n";
echo "Удвоенные числа: " . implode(", ", $doubledNumbers) . "\n";
echo "Сумма квадратов: " . $sumOfSquares . "\n";

// Arrow function which will concatenate your first and last name

$firstName = "Иван";
$lastName = "Иванов";

// Стрелочная функция
$fullName = fn($first, $last) => $first . ' ' . $last;

// Вывод полного имени
echo "Полное имя: " . $fullName($firstName, $lastName) . "\n";