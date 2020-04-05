<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Data extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setCreator(new InlineCreator());
        $this->setContent($content);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'data';
    }

    public function setValue(string $value)
    {
        $this->addAttribute('value', $value);
    }
}