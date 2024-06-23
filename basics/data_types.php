<?php
$integer = 10;
$float = 10.5;
$string = "Hello";
$boolean = true; # false
$array = array("apple", "banana", "cherry");


echo "Integer: $integer\n";
echo "Float: $float\n";
echo "String: $string\n";
echo "Boolean: " . ($boolean ? "true" : "false") . "\n";
echo "Array: " . implode(", ", $array) . "\n";
?>
