<?php

require_once 'practice/14_OOP/Repository/ProductInMySQLRepository.php';

$create = new \App\Repository\ProductInMySQLRepository();

$create->createProduct("{$_POST['name']}","{$_POST['price']}","{$_POST['season']}");