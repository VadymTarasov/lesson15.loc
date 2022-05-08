<?php

namespace App\Repository;

use App\Exception\ProductAlreadyExsistException;
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
            throw new ProductAlreadyExsistException('Product already exist');
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

    }

    public function deleteProduct(Product $product): void
    {
        // TODO: Implement deleteProduct() method.
    }
}
