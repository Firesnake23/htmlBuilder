<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class VarElement extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
        $this->setContent($content);
    }

    public function getName(): string
    {
        return 'var';
    }
}