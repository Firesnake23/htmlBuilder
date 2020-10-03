<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Col extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'col';
    }

    public function setSpan(int $span)
    {
        $this->addAttribute('span', $span);
    }
}