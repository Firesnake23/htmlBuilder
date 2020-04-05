<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Source extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
    }

    public function getName(): string
    {
        return 'source';
    }

    public function setSrc(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function setSrcset(string $srcSet)
    {
        $this->addAttribute('srcset', $srcSet);
    }

    public function setMedia(string $media)
    {
        $this->addAttribute('media', $media);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }
}