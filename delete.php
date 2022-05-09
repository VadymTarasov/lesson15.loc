<?php


require_once 'practice/14_OOP/Repository/ProductInMySQLRepository.php';
$del = new \App\Repository\ProductInMySQLRepository();

$delId = $_POST["delId"];
$del->deleteSQLProduct("$delId");