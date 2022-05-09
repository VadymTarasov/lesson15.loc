<?php

namespace App\Exception;

use Throwable;

class ProductAlreadyExsistException extends ProductBaseExclusion
{
    protected $message = "Product already exist";

}