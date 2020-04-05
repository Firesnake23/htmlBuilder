<?php


namespace firesnake\htmlBuilder\attributes;


class Flag extends AbstractAttribute
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function create(): string
    {
        return ' ' . $this->name;
    }
}