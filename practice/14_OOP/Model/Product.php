<?php

namespace App\Model;

class Product
{
    private int $id;

    private string $name;

    private Price $price;

    private string $season;

    public function __construct(int $id, string $name, Price $price, string $season)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->season = $season;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function getSeason(): string
    {
        return $this->season;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => (string) $this->price,
            'season' => $this->season
        ];
    }
}