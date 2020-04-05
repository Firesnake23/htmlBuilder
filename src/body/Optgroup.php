<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Optgroup extends HtmlElement
{
    public function getName(): string
    {
        return 'optgroup';
    }

    public function disable()
    {
        $this->addAttribute('disabled');
    }

    public function setLabel(string $label)
    {
        $this->addAttribute('label', $label);
    }
}