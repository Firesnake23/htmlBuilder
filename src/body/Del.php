<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Del extends HtmlElement
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
        return 'del';
    }

    public function setCite(string $cite)
    {
        $this->addAttribute('cite', $cite);
    }

    public function setDatetime(string $datetime)
    {
        $this->addAttribute('datetime', $datetime);
    }
}