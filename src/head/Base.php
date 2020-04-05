<?php


namespace firesnake\htmlBuilder\head;


use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Base extends HtmlElement
{
    public function __construct(string $href)
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
        $this->addAttribute('href', $href);
    }

    public function getName(): string
    {
        return 'base';
    }
    
    public function setTarget(string $target) {
        $this->addAttribute('target', $target);
    }
}