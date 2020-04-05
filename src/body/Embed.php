<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Embed extends HtmlElement
{
    public function __construct(string $src)
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
        $this->setSrc($src);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'embed';
    }

    public function setHeight(int $pixels)
    {
        $this->addAttribute('height', $pixels);
    }

    public function setSrc(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }

    public function setWidth(int $width)
    {
        $this->addAttribute('width', $width);
    }
}