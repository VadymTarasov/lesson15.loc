<?php

namespace App\Model;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    private Product $product;

    protected function getMockPrice()
    {
        $price = $this->createMock(Price::class);
        $price->method('createFromString')
            ->willReturn(100);
        return $price;
    }
    protected function setUp(): void
    {

        $this->product = new Product(1,'Apple',$this->getMockPrice(),'summer');
    }

    public function testGetId()
    {
        $this->assertEquals(1,$this->product->getId());

    }

    public function test__construct()
    {
        $this->assertEquals(null, $this->product->__construct(1,'Apple',$this->getMockPrice(),'summer'));
    }

    public function testGetPrice()
    {

        $this->assertEquals($this->getMockPrice(),$this->product->getPrice());
    }


    public function testGetName()
    {
        $this->assertEquals('Apple',$this->product->getName());
    }

    public function testToArray()
    {
        $this->assertEquals([
            'id' => 1,
            'name' => 'Apple',
            'price' => '',
            'season' => 'summer'
        ], $this->product->toArray());

    }

}
