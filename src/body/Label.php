<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Label extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
        $this->setContent($content);
    }

    public function getName(): string
    {
        return 'label';
    }

    public function setFor(string $id)
    {
        $this->addAttribute('for', $id);
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }
}