<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Datalist extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'datalist';
    }
}