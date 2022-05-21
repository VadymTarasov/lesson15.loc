<?php

namespace App\Repository;

use App\Exception\ProductAlreadyExsistException;
use App\Exception\ProductDeleteException;
use App\Exception\ProductNotFoundException;
use App\Exception\ProductUpdateException;
use App\Model\Product;
use PHPUnit\Framework\TestCase;

class ProductInMemoryRepositoryTest extends TestCase
{
    public function testAddTwoIdenticalProduct()
    {
        $product = $this->createMock(Product::class);
        $product->method('getId')
            ->willReturn(1);
        $repository =new ProductInMemoryRepository();
        $repository->addProduct($product);
        $this->expectException(ProductAlreadyExsistException::class);
        $repository->addProduct($product);

    }
    public function testFindAllProducts()
    {
        $repository =new ProductInMemoryRepository();
        $products = [];
        for ($i = 0; $i <3; $i++){
            $product = $this->createMock(Product::class);
            $product->method('getId')
                ->willReturn($i +1);
            $products[$i + 1] = $product;
            $repository->addProduct($product);
        }
        $this->assertCount(3,$repository->findAllProducts());
        $this->assertEquals($products,$repository->findAllProducts());
    }

    public function testUpdateProduct()
    {
        $product = $this->createMock(Product::class);
        $product->method('getName')
            ->willReturn("!Apple#");
        $repository =new ProductInMemoryRepository();
        $repository->updateProduct($product);
        $this->expectException(ProductUpdateException::class);
        $repository->updateProduct($product);

    }
    public function testDeleteProduct()
    {

        $product = $this->createMock(Product::class);
        $product->method('getId')
            ->willReturn(1);
        $repository =new ProductInMemoryRepository();
        $repository->deleteProduct($product);
        $this->expectException(ProductDeleteException::class);
        $repository->deleteProduct($product);

    }

}
