<?php

namespace App\Exception;

use Throwable;

class ProductNotFoundException extends ProductBaseExclusion
{
    protected $message = "Продукт не найден";

}