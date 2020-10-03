<?php


namespace firesnake\htmlBuilder\head;


use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Link extends HtmlElement
{
    public function __construct(string $href, string $rel, string $type)
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
        $this->setHref($href);
        $this->setRel($rel);
        $this->setType($type);
    }

    public function getName(): string
    {
        return 'link';
    }

    public function setCrossorigin(string $crossorigin)
    {
        $this->addAttribute('crossorigin', $crossorigin);
    }

    public function setHref(string $url)
    {
        $this->addAttribute('href', $url);
    }

    public function setHreflang(string $langCode)
    {
        $this->addAttribute('hreflang', $langCode);
    }

    public function setMedia(string $media)
    {
        $this->addAttribute('media', $media);
    }

    public function setReferrerpolicy(string $policy)
    {
        $this->addAttribute('referrerpolicy', $policy);
    }

    public function setRel(string $rel)
    {
        $this->addAttribute('rel', $rel);
    }

    public function setSizes(string $sizes)
    {
        $this->addAttribute('sizes', $sizes);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }
}