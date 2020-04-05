<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Option extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'option';
    }

    public function disable()
    {
        $this->addAttribute('disabled');
    }

    public function setLabel(string $label)
    {
        $this->addAttribute('label', $label);
    }

    public function select()
    {
        $this->addAttribute('selected');
    }

    public function setValue(string $value)
    {
        $this->addAttribute('value', $value);
    }
}