<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Param extends HtmlElement
{
    public function __construct(?string $name = null, ?string $value = null)
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());

        if ($name != null) {
            $this->setName($name);
        }

        if ($value != null) {
            $this->setValue($value);
        }
    }

    public function getName(): string
    {
        return 'param';
    }

    public function setName(string $value)
    {
        $this->addAttribute('name', $value);
    }

    public function setValue(string $value)
    {
        $this->addAttribute('value', $value);
    }
}