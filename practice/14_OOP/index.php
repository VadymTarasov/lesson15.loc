<?php

class A
{
    private string $name = 'Test';
    private int $age = 0;

    public function __get($fieldName) {
        echo '__get' . PHP_EOL;

        return $this->$fieldName;
    }

    public function updateName($value)
    {
        $fieldName = 'name';

        $this->$fieldName = $value;
    }

    public function __set($fieldName, $value)
    {
        $this->$fieldName = $value;
    }

    public function __toString()
    {
        return $this->name;
    }
}


$class = new A();

$class->name = 'John';
$class->age = 15;

echo (string) $class. PHP_EOL;

$class->updateName('David');

echo (string) $class . PHP_EOL;