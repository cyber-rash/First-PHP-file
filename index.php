<?php

echo "Hello World<br>"; // <br> for HTML line break

// This is a single-line comment.

# This is also a single-line comment.

/*
This is a multi-line comment.
It can span multiple lines.
*/

// Declaring variables
$name = "John";
$age = 30;
$isStudent = true;

// Displaying variables
echo "Name: $name<br>"; // <br> for HTML line break
echo "Age: $age<br>";
echo "Is student: " . ($isStudent ? "Yes" : "No") . "<br>";

// Strings
$string1 = "Hello, world!";
$string2 = 'PHP is fun!';
echo $string1 . " " . $string2 . "<br>"; // Concatenate strings with <br>

// Numbers
$integer = 42;
$float = 3.14;
echo "Integer: $integer<br>";
echo "Float: $float<br>";

// Math Operations
$a = 10;
$b = 3;

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
$modulus = $a % $b;

echo "Sum: $sum<br>";
echo "Difference: $difference<br>";
echo "Product: $product<br>";
echo "Quotient: $quotient<br>";
echo "Modulus: $modulus<br>";

// Type Casting
$number = "42"; // string
$integer = (int)$number; // cast to integer

echo "String: $number<br>";
echo "Integer: $integer<br>";

$decimal = "3.14"; // string
$float = (float)$decimal; // cast to float

echo "String: $decimal<br>";
echo "Float: $float<br>";

// Arrays
$fruits = array("Apple", "Banana", "Orange");

// Adding a new element to the array
$fruits[] = "Pear";

// Displaying the array
foreach ($fruits as $fruit) {
    echo $fruit . "<br>"; // <br> for HTML line break
}

// Associative Arrays
$person = array(
    "name" => "John",
    "age" => 30,
    "job" => "Developer"
);

echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "Job: " . $person["job"] . "<br>";

?>
