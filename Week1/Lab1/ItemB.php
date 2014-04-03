<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!Example #1 array_count_values() example>
<?php
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
?><!END: Example #1 array_count_values() example>
    
    <!Example #1 array_flip() example : collision>
<?php
$trans = array("a" => 1, "b" => 1, "c" => 2);
$trans = array_flip($trans);
print_r($trans);
?> <!END: Example #1 array_flip() example : collision>

<!Example #1 array_key_exists() example>
<?php
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
?><!END: Example #1 array_key_exists() example>

<!Example #1 array_map() example>
<?php
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
?><!END: Example #1 array_map() example>

<!Example #1 array_rand() example>
<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?><!END: Example #1 array_rand() example>

<!Example #1 array_push() example>
<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?><!END: Example #1 array_push() example>

<!Example #1 in_array() example>
<?php
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}
?><!END: Example #1 in_array() example>

<!Example #1 shuffle() example>
<?php
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
?><!END: Example #1 shuffle() example>

<!Example #2 Recursive count() example>
<?php
$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

// recursive count
echo count($food, COUNT_RECURSIVE); // output 8

// normal count
echo count($food); // output 2

?><!END: Example #2 Recursive count() example>

<!Example #1 sort() example>
<?php

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?><!END: Example #1 sort() example>










    </body>
</html>
