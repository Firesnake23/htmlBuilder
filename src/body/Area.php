<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Area extends HtmlElement
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
        return "area";
    }

    public function setAlt(string $text)
    {
        $this->addAttribute('alt', $text);
    }

    public function setCoords(string $cords)
    {
        $this->addAttribute('coords', $cords);
    }

    public function setDownload(string $filename)
    {
        $this->addAttribute('download', $filename);
    }

    public function setHref(string $href)
    {
        $this->addAttribute('href', $href);
    }

    public function setHrefLang(string $langCode)
    {
        $this->addAttribute('hreflang', $langCode);
    }

    public function setMedia(string $mediaQuery)
    {
        $this->addAttribute('media', $mediaQuery);
    }

    /**
     * Allowed values are {@link A::setRel()} Constants with REL_::
     *
     * @param string $rel
     */
    public function setRel(string $rel)
    {
        $this->addAttribute('rel', $rel);
    }

    public function setShape(string $shape)
    {
        $this->addAttribute('shape', $shape);
    }

    public function setTarget(string $target)
    {
        $this->addAttribute('target', $target);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }
}