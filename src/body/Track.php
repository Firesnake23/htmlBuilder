<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Track extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
    }

    public function getName(): string
    {
        return 'track';
    }

    public function default()
    {
        $this->addAttribute('default');
    }

    public function setKind(string $kind)
    {
        $this->addAttribute('kind', $kind);
    }

    public function setLabel(string $label)
    {
        $this->addAttribute('label', $label);
    }

    public function setSrc(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function setSrclang(string $lang)
    {
        $this->addAttribute('srclang', $lang);
    }
}