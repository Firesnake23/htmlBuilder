<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Fieldset extends HtmlElement
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'fieldset';
    }

    public function disable()
    {
        $this->addAttribute('disabled');
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }
}