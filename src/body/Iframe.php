<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Iframe extends HtmlElement
{
    public function __construct(string $src)
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
        $this->setSrc($src);
    }

    public function getName(): string
    {
        return 'iframe';
    }

    public function setAllowFullscreen()
    {
        $this->addAttribute('allowfullscreen');
    }

    public function setAllowpaymentrequest()
    {
        $this->addAttribute('allowpaymentrequest');
    }

    public function setHeight(int $pixels)
    {
        $this->addAttribute('height', $pixels);
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }

    public function setReferrerpolicy(string $policy)
    {
        $this->addAttribute('referrerpolicy', $policy);
    }

    public function setSandbox(string $sandbox)
    {
        $this->addAttribute('sandbox', $sandbox);
    }

    public function setSrc(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function setSrcdoc(string $srcdoc)
    {
        $this->addAttribute('srcdoc', $srcdoc);
    }

    public function setWidth(int $pixels)
    {
        $this->addAttribute('width', $pixels);
    }
}