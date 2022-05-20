<?php

require_once 'practice/14_OOP/Repository/ProductInMySQLRepository.php';

$id = $_POST["edit_id"];
$name = $_POST["edit_name"];
$price = $_POST["edit_price"];
$season = $_POST["edit_season"];

$update = new \App\Repository\ProductInMySQLRepository();
$update->updateSQLProduct("$name","$price","$season","$id");