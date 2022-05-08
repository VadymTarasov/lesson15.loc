<?php

interface InfoProviderInterface
{
    public function getInfo(): string;
}

abstract class Animal
{
    protected int $age;

    protected string $name;

    public function __construct(string $name, int $age)
    {
        $this->age = $age;
        $isNameUpdate = $this->setName($name);

        if ($isNameUpdate === false) {
            throw new Exception('Name is to short');
        }
    }

    public function setName(string $name): bool
    {
        if (strlen($name) < 2) {
            return false;
        }

        $this->name = $name;

        return true;
    }
}

class Cat extends Animal implements InfoProviderInterface
{
    public function getInfo(): string
    {
        return $this->name . ' мяу';
    }
}

class Dog extends Animal implements InfoProviderInterface
{
    public function getInfo(): string
    {
        return $this->name . ' ' . $this->age . ' гав';
    }
}

class Chair implements InfoProviderInterface
{
    public function getInfo(): string
    {
        return 'Стулка';
    }
}

$animals = [];
$animals[] = new Cat('Мурзик', 2);
$animals[] = new Cat('Рыжик', 1);
$animals[] = new Dog('Тузик', 4);
$animals[] = new Chair();

foreach ($animals as $animal) {
    if ($animal instanceof InfoProviderInterface) {
        echo $animal->getInfo();
    } else {
        echo 'Is not Info about this object ' . get_class($animal);
    }
    echo '<br>';
}
