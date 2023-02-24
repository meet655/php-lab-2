<?php

$numbers = [2, 5, 1, 8, 4];

$num_elements = count($numbers);
echo "The number of elements in the array is: $num_elements\n";

sort($numbers);
echo "The sorted array in ascending order is: ";
print_r($numbers);

$reversed_numbers = array_reverse($numbers);
echo "The reversed array is: ";
print_r($reversed_numbers);

$search_value = 5;
if (in_array($search_value, $numbers)) {
    echo "$search_value exists in the array\n";
} else {
    echo "$search_value does not exist in the array\n";
}

$sum = array_sum($numbers);
echo "The sum of the elements in the array is: $sum\n";

?>

output

The number of elements in the array is: 5 The sorted array in ascending order is: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 8 ) The reversed array is: Array ( [0] => 8 [1] => 5 [2] => 4 [3] => 2 [4] => 1 ) 5 exists in the array The sum of the elements in the array is: 20
