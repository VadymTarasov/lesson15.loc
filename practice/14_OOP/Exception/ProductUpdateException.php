<?php

namespace App\Exception;

use Throwable;

class ProductUpdateException extends ProductBaseExclusion
{
    protected $message = "Название продукта не может содержать символы";

}