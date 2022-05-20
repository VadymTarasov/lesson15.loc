<?php

namespace App\Model;

use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    private Price $price;

    protected function setUp(): void
    {
        $this->price = new Price(1500);
    }


    public function test__toString()
    {
        $this->assertEquals('15', $this->price->__toString());

    }

    public function test__construct()
    {
        $this->assertEquals(null, $this->price->__construct(1500));
    }

//???
    public function testCreateFromString()
    {
        $this->assertEquals(Price::createFromString(1), $this->price->CreateFromString(1));
    }

}
