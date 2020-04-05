<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Progress extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'progress';
    }

    public function setMax(int $max)
    {
        $this->addAttribute('max', $max);
    }

    public function setValue(int $value)
    {
        $this->addAttribute('value', $value);
    }
}