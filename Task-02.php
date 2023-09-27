<?php


//Task 03
$numbers = range(1, 10);
function removeEvenNumbers($numbers)
{
    // remove the even numbers from the array
    return $numbers % 2 !== 0;
}

$result = array_filter($numbers, 'removeEvenNumbers');


print_r($result);
?>