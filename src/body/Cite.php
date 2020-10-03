<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Cite extends HtmlElement
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
        return 'cite';
    }
}