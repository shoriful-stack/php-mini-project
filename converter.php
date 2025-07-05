<?php
// Project 2: Temperature Converter
// Make a PHP script that takes temperature input or static variable and converts it between Celsius and Fahrenheit.

// Celsius to Fahrenheit: (celsius * 9/5) + 32

// Fahrenheit to Celsius: (fahrenheit - 32) * 5/9

$factor = 9 / 5;
$offset = 32;

echo "Enter the temperature: ";
$temperature = (float) readline();

echo "Convert to (F: Fahrenheit, C: Celsius)";

$choice = readline();

switch ($choice) {
    case ("F"):
        $result = $temperature * $factor + $offset;
        echo "Temperature is in Fahrenheit: $result";
        break;
    case ("C"):
        $result = ($temperature - $offset) / $factor;
        echo "Temperature is in Celsius: $result";
        break;
    default:
        echo "Invalid Input";
        break;
}