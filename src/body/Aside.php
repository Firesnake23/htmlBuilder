<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Aside extends HtmlElement
{
    public function getName(): string
    {
        return 'aside';
    }
}