<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Select extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getName(): string
    {
        return 'select';
    }

    public function autofocus()
    {
        $this->addAttribute('autofocus');
    }

    public function disable()
    {
        $this->addAttribute('disabled');
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }

    public function multiple()
    {
        $this->addAttribute('multiple');
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }

    public function required()
    {
        $this->addAttribute('required');
    }

    public function setSize(int $size)
    {
        $this->addAttribute('size', $size);
    }
}