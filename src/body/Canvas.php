<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Canvas extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'canvas';
    }

    public function setHeight(int $height)
    {
        $this->addAttribute('height', $height);
    }

    public function setWidth(int $width)
    {
        $this->addAttribute('width', $width);
    }
}