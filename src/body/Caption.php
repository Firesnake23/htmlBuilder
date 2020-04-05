<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Caption extends HtmlElement
{

    public function __construct(string $content)
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
        $this->setContent($content);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'caption';
    }
}