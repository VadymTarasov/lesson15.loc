<?php

$a = 3;
$b = 4;
$c = 1;

if ($a > $b) {
    $max = $a;
    $min = $b;

    if ($c > $a) {
        $max = $c;
    } else if ($b > $c) {
        $min = $c;
    }
} else {
    $max = $b;
    $min = $a;

    if ($c > $b) {
        $max = $c;
    } else if ($a > $c) {
        $min = $c;
    }
}

echo "Max - {$max}" . PHP_EOL;
echo "Min - {$min}";