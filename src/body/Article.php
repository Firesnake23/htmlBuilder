<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Article extends HtmlElement
{
    public function getName(): string
    {
        return 'article';
    }
}