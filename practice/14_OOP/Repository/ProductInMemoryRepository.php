<?php

namespace App\Repository;
require_once "ProductInMySQLRepository.php";

use App\Exception\ProductAlreadyExsistException;
use App\Exception\ProductDeleteException;
use App\Exception\ProductNotFoundException;
use App\Exception\ProductUpdateException;
use App\Model\Product;
use Exception;

class ProductInMemoryRepository implements ProductRepositoryInterface
{
    /**
     * @var Product[]
     */
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }


    public function addProduct(Product $product): void
    {
        if (array_key_exists($product->getId(), $this->products)) {
            // error - already exist in storage
            throw new ProductAlreadyExsistException;
        }

        $this->products[$product->getId()] = $product;

    }

    /**
     * @return array|Product[]
     */
    public function findAllProducts(): array
    {
        return $this->products;
    }

    public function updateProduct(Product $product): void
    {
        $getId = new \App\Repository\ProductInMySQLRepository();
        $id = $getId->getAllIdProductsSQL();

        if (array_key_exists($product->getId(), $this->products)
            && !array_search($product->getId(), $id)) {

            throw new ProductNotFoundException;
        }
        $this->products[$product->getId()] = $product;


        if (array_key_exists($product->getName(), $this->products) && strpbrk($product->getName(), "!@#$%^&*/") ) {

            throw new ProductUpdateException;
        }
        $this->products[$product->getName()] = $product;

    }

    public function deleteProduct(Product $product): void
    {
        $getId = new \App\Repository\ProductInMySQLRepository();
        $id = $getId->getAllIdProductsSQL();

        if (array_key_exists($product->getId(), $this->products)
            && !array_search($product->getId(), $id)) {

            throw new ProductNotFoundException;
        }

        if (array_key_exists($product->getId() == 1, $this->products)) {

            throw new ProductDeleteException;
        }

        $this->products[$product->getId()] = $product;

    }
}

