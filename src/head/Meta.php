<?php


namespace firesnake\htmlBuilder\head;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Meta extends HtmlElement
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
       return "meta";
    }

    public function setCreator(?AbstractCreator $creator)
    {
        parent::setCreator(new ShortCreator());
    }

    public function setCharset(string $charset)
    {
        $this->addAttribute('charset', $charset);
    }

    public function setContent(string $content)
    {
        $this->addAttribute('content', $content);
    }

    public function setHttpEquiv(string $equiv)
    {
        $this->addAttribute('http-equiv', $equiv);
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }
}