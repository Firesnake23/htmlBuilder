<?php


namespace firesnake\htmlBuilder\attributes;


use PHPUnit\Framework\Exception;

class AttributeAlreadyExistsException extends Exception
{

    /**
     * AttributeAlreadyExistsException constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}