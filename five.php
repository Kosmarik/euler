<?php

function arDalinasi($number) {
    $arrayOfDalin = [];
    for ($i = 1; $i <= 20; $i++) {
       if ($number % $i == 0) {
           $arrayOfDalin[] = $i;
       }
    }

    if(count($arrayOfDalin) == 20) {
        return true;
    } else {
        return false;
    }
}

$i = 10;

do{
    $i++;
} while (arDalinasi($i) != true);
echo $i . "\n";