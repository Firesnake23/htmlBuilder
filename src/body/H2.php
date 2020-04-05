<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class H2 extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setContent($content);
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'h2';
    }
}