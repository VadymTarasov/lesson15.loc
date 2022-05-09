<?php

namespace App\Exception;

use Throwable;

class ProductDeleteException extends ProductBaseExclusion
{
    protected $message = "Этот продукт не может быть удален";

}