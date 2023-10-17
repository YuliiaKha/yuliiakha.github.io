<?php

$int_var = 20;
// In next line, convert $int_var to a float and var_dump() it:
var_dump((float)$int_var);
echo "</br>";

$float_var = 30.5;
// In next line, round $float_var to the nearest integer and var_dump() it:
var_dump(ceil($float_var));
echo "</br>";

$numeric_string = '12345';
// In next line, inside if, check if $numeric_string is numeric:
if (is_numeric($numeric_string)) {
    var_dump('Its a number');
} else {
    var_dump('It not a number');
}
echo "</br>";

$pos_num = 123;
// In next line, convert $pos_num to a negative number and var_dump() it:
$pos_num = -$pos_num;
var_dump($pos_num);
echo "</br>";

$total_amount = 12434.45;
// Using number_format() function, in next line, format $total_amount to 2 decimal places and var_dump() it:
var_dump(number_format($total_amount, 2));
echo "</br>";

$index1 = 10;
$index2 = 10;
// For $index1 use increment operator before var(++$a) and var_dump() it:
var_dump(++$index1);
echo "</br>";
// For $index2 use increment operator after var($a++) and var_dump() it:
var_dump($index2++);
echo "</br>";

$int_ten = 10;
$string_ten = '10';

// In next line, compare $int_ten and $string_ten, so Equal is printed:
// Think about the difference between == and ===
if ($int_ten == $string_ten) {
    var_dump('Equal');
} else {
    var_dump('Not Equal');
}
echo "</br>";

// Convert the following if-else statement to a ternary operator
$age = 20;
//$output = '';
//if ($age > 18) {
//    $output = 'You are an adult';
//} else {
//    $output = 'You are not an adult';
//}
//
//echo $output;
echo $age > 18 ? 'You are an adult' : 'You are not an adult';