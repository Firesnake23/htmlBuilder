<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Abbr extends HtmlElement
{
    public function __construct(string $content, string $meaning)
    {
        parent::__construct();
        $this->setCreator(new InlineCreator());
        $this->setContent($content);
        $this->setTitle($meaning);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'abbr';
    }
}