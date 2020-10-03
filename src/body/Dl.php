<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Dl extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
       return 'dl';
    }
}