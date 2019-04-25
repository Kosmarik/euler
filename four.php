<?php


for ($i = 100; $i < 1000; $i++) {
    for ($x = 100; $x < 1000 ; $x++) {
        $y = $x * $i;

        if (strlen($y) == 6) {
            $y = "$y";
            $a = $y[0] . $y[1] . $y[2];
            $b = $y[5] . $y[4] . $y[3];
            if ($a == $b) {
                $numbers = [$y, $x, $i];
            }
        }
    }
}

echo '<pre>';
print_r($numbers);