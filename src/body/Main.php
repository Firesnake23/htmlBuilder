<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Main extends HtmlElement
{

    public function getName(): string
    {
        return 'main';
    }
}