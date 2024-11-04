<?php

// Name: Abdalrhman Majed Abuwarda
// ID: 1301197455

// Q1:
function createMultiplicationTable($startTable, $endTable, $rows)
{
    for ($table = $startTable; $table <= $endTable; $table++) {
        echo "Multiplication Table for $table:\n";

        for ($i = 1; $i <= $rows; $i++) {
            echo "$table x $i = " . ($table * $i) . "\n";
        }

        echo "\n"; // Blank line between tables
    }
}

// Example usage
$startTable = 1;  // Starting multiplication table
$endTable = 5;    // Ending multiplication table
$rows = 10;       // Number of rows in each table

createMultiplicationTable($startTable, $endTable, $rows);






// Q2:
function checkOddOrEven($number)
{
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

$number = 15;
echo "The number $number is " . checkOddOrEven($number) . ".";
