<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    $i = 2;
    while ($i <= sqrt($number)) {
        if ($number % $i === 0) {
            return false;
        }
        $i++;
    }
    return true;
}

function findingPrimeNumbersFromArray($arr) {
    $primeNumbers = array_filter($arr, function($value) {
        return is_numeric($value) && isPrime($value);
    });
    return array_values($primeNumbers);
}

$arrayOfNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$primeNumbers = findingPrimeNumbersFromArray($arrayOfNumbers);

echo "Found prime numbers from the array are: ";
echo implode(", ", $primeNumbers);
?>
