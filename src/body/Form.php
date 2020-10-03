<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Form extends HtmlElement
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'form';
    }

    public function setAcceptCharset(string $charset)
    {
        $this->addAttribute('accept-charset', $charset);
    }

    public function setAction(string $url)
    {
        $this->addAttribute('action', $url);
    }

    public function setAutocomplete(bool $autocomplete)
    {
        $autocompleteStr = 'off';
        if ($autocomplete) {
            $autocompleteStr = 'on';
        }
        $this->addAttribute('autocomplete', $autocompleteStr);
    }

    public function setEnctype(string $enctype)
    {
        $this->addAttribute('enctype', $enctype);
    }

    public function setMethod(string $method)
    {
        $this->addAttribute('method', $method);
    }

    public  function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }

    public function novalidate()
    {
        $this->addAttribute('novalidate');
    }

    public function setTarget(string $target)
    {
        $this->addAttribute('target', $target);
    }
}