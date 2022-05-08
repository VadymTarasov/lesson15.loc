<?php

require_once './vendor/autoload.php';

use App\Model\Price;
use App\Model\Product;
use App\Repository\ProductInMemoryRepository;
echo "tut";
$price = new Price(1500);
$product = new Product(1, 'Apple', $price, 'Summer');

$repository = new ProductInMemoryRepository();

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


