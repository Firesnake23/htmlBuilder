<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Ol extends HtmlElement
{
    public function getName(): string
    {
        return 'ol';
    }

    public function reverse()
    {
        $this->addAttribute('reversed');
    }

    public function setStart(int $number)
    {
        $this->addAttribute('start', $number);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }
}