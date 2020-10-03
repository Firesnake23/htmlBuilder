<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Div extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
       return 'div';
    }
}