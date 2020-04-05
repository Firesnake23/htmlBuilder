<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Body extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
       return 'body';
    }
}