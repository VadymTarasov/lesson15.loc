<?php

require_once './vendor/autoload.php';
require_once 'dd.php';

use App\Exception\ProductBaseExclusion;
use App\Model\Price;
use App\Model\Product;
use App\Repository\ProductInMemoryRepository;

$price = new Price(1500);
$product = new Product(1, "!Apple", $price, 'Summer');

$repository = new ProductInMemoryRepository();

$repository->updateProduct($product);


try {
    $repository->updateProduct($product);
} catch (ProductBaseExclusion $e) {
    die($e->getMessage());
}
/*
$repository->addProduct($product);

echo 'Success';


try {
    $repository->addProduct($product);
} catch (Exception $exception) {
    echo 'Not success' . PHP_EOL;

    var_dump($exception->getMessage() . PHP_EOL);
} finally {
    echo PHP_EOL . 'flow continue';
}
/*
1. Дописать реализацию ProductInMemoryRepository
2. Написать ProductInMySQLRepository - который будет работать не с массивом а с БД (дамп БД на гите)
3. Отобразить список товаров используя AJAX/jQuery
4. Добавить новый товар используя AJAX/jQuery и при успешном ответе - сразу отобразить его в листинге
 */

