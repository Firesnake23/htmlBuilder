<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Footer extends HtmlElement
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'footer';
    }
}