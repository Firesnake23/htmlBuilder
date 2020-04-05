<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Output extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'output';
    }

    public function setFor(string $elementId)
    {
        $this->addAttribute('for', $elementId);
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }

    public function setName(string $value)
    {
        $this->addAttribute('name', $value);
    }
}