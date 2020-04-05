<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Code extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'code';
    }
}