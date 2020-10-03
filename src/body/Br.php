<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Br extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
    }

    public function getName(): string
    {
        return 'br';
    }
}