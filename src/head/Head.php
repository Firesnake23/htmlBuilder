<?php


namespace firesnake\htmlBuilder\head;


use firesnake\htmlBuilder\HtmlElement;

class Head extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
       return 'head';
    }
}