<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Address extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'address';
    }
}