<?php
/*
//1 Написать функцию которая вернет все элементы массива значение которых больше указанного аргумента
$data = [1, 2, 3];

//function moreThan(array $data, 2): array // [3]
function moreThan(array $data, $number): array {
    /*$tmp = [];
    foreach($data as $item) {
        if ($item > $number) {
            $tmp[] = $item;
        }
    }

    return $tmp;
    */
/*
return array_filter($data, function($item) use ($number) {
    return $item > $number;
});
}

var_dump(moreThan($data, 2));

*/
// 2 . Написать функцию которая считает сумму четных элементов массива,
// который передается в аргументы функции.
/*
$data = [1, 2, 3, 4, 6];

function evenSum(array $data): int {
    return array_sum(array_filter($data, function($item) {
        return $item % 2 === 0;
    }));
} // 6

var_dump(even($data));
*/






// 3 Написать функцию которой передается индекс в массиве и количество
// элементов которое необходимо вернуть начиная с этого индекса

$data = [1, 2, 3, 4, 5, 6];

function getDataAfterIndex(array $data, int $offset, int $lenth): array {
    $tmp = [];

    $a = $offset + $lenth - 1;
    for($i = $offset, $count = count($data); $i < $count; $i++) {
        if ($i <= $a) {
            $tmp[] = $data[$i];
        }
    }

    return $tmp;

} // [3, 4, 5]

var_dump(getDataAfterIndex($data, 2, 2));














