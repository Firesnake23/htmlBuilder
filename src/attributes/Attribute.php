<?php


namespace firesnake\htmlBuilder\attributes;


class Attribute extends AbstractAttribute
{
    /**@var string $value*/
    private $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function create(): string
    {
        return ' ' . $this->getName() . '="' . $this->value . '"';
    }
}