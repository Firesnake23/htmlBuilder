<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class ObjectHtml extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'object';
    }

    public function setData(string $url)
    {
        $this->addAttribute('data', $url);
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }

    public function setHeight(int $pixels)
    {
        $this->addAttribute('height', $pixels);
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }

    public function setUsemap(string $mapId)
    {
        $this->addAttribute('usemap', $mapId);
    }

    public function setWidth(int $pixels)
    {
        $this->addAttribute('width', $pixels);
    }
}