<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Template extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getName(): string
    {
        return 'template';
    }
}