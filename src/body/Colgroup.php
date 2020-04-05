<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Colgroup extends HtmlElement
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'colgroup';
    }

    public function setSpan(int $span)
    {
        $this->addAttribute('span', $span);
    }
}