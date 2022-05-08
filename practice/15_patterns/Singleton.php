<?php

class Product
{
    private static $instance;

    public $mix;

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
    }

    private function __clone() {
    }
}

$firstProduct = Product::getInstance();
$secondProduct = Product::getInstance();
$thirdProduct = Product::getInstance();

var_dump($firstProduct);
var_dump($secondProduct);
var_dump($thirdProduct);