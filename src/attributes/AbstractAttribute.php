<?php


namespace firesnake\htmlBuilder\attributes;


abstract class AbstractAttribute
{
    /**@var string $name;*/
    protected $name;

    public function getName(): ?string {
        return $this->name;
    }

    public abstract function create(): string;
}