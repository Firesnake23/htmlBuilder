<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Script extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'script';
    }

    public function async()
    {
        $this->addAttribute('async');
    }

    public function setCharset(string $charset)
    {
        $this->addAttribute('charset', $charset);
    }

    public function defer()
    {
        $this->addAttribute('defer');
    }

    public function setSrc(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }
}