<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Img extends HtmlElement
{
    public function __construct(string $src)
    {
        parent::__construct();
        $this->addAttribute('src', $src);
        $this->setCreator(new ShortCreator());
    }

    public function getName(): string
    {
        return 'img';
    }

    public function setAlt(string $alt)
    {
        $this->addAttribute('alt', $alt);
    }

    public function setCrossorigin(string $crossorigin)
    {
        $this->addAttribute('crossorigin', $crossorigin);
    }

    public function setHeight(int $pixels)
    {
        $this->addAttribute('height', $pixels);
    }

    public function isMap()
    {
        $this->addAttribute('ismap');
    }

    public function setLongDesc(string $longDesc)
    {
        $this->addAttribute('longdesc', $longDesc);
    }

    public function setReferrerPolicy(string $policy)
    {
        $this->addAttribute('referrerpolicy', $policy);
    }

    public function setSizes(string $sizes)
    {
        $this->addAttribute('sizes', $sizes);
    }

    public function setSrcset(string $srcset)
    {
        $this->addAttribute('srcset', $srcset);
    }

    public function setUseMap(string $mapId)
    {
        $this->addAttribute('usemap', $mapId);
    }

    public function setWidth(int $pixels)
    {
        $this->addAttribute('width', $pixels);
    }
}