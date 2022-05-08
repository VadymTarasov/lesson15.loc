<?php

require_once './vendor/autoload.php';

use App\Exception\ProductAlreadyExsistException;
use App\Model\Price;
use App\Model\Product;
use App\Repository\ProductInMemoryRepository;

//header("Access-Control-Allow-Origin: *");
$inputJSON = file_get_contents('php://input');

$data = json_decode($inputJSON, true);

$price = Price::createFromString($data['price']);
$product = new Product(1, $data['name'], $price, $data['season']);

try {

    $productRepository = new ProductInMemoryRepository();
    $productRepository->addProduct($product);
} catch (ProductAlreadyExsistException $exception) {

}

header('Content-Type: application/json');

die(json_encode($product->toArray()));
