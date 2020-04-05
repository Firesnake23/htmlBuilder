<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Map extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getName(): string
    {
        return 'map';
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }
}