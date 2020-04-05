<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Input extends HtmlElement
{
    public function __construct(string $type)
    {
        parent::__construct();
        $this->setCreator(new ShortCreator());
        $this->setType($type);
    }

    public function getName(): string
    {
        return 'input';
    }

    public function setAccept(string $accept)
    {
        $this->addAttribute('accept', $accept);
    }

    public function setAlt(string $text)
    {
        $this->addAttribute('alt', $text);
    }

    public function setAutocomplete(bool $autocomplete)
    {
        $autocompleteStr = 'off';
        if ($autocomplete) {
            $autocompleteStr = 'on';
        }

        $this->addAttribute('autocomplete', $autocompleteStr);
    }

    public function autofocus()
    {
        $this->addAttribute('autofocus');
    }

    public function checked()
    {
        $this->addAttribute('checked');
    }

    public function setDirname(string $dirname)
    {
        $this->addAttribute('dirname', $dirname);
    }

    public function disable()
    {
        $this->addAttribute('disabled');
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }

    public function setFormenctype(string $formenctype)
    {
        $this->addAttribute('formenctype', $formenctype);
    }

    public function setFormmethod(string $method)
    {
        $this->addAttribute('formmethod', $method);
    }

    public function formnovalidate()
    {
        $this->addAttribute('formnovalidate');
    }

    public function setFormtarget(string $target)
    {
        $this->addAttribute('formtarget', $target);
    }

    public function setHeight(int $pixels)
    {
        $this->addAttribute('height', $pixels);
    }

    public function setList(string $listId)
    {
        $this->addAttribute('list', $listId);
    }

    public function setMax(int $max)
    {
        $this->addAttribute('max', $max);
    }

    public function setMaxlength(int $maxLength)
    {
        $this->addAttribute('maxlength', $maxLength);
    }

    public function setMin(int $min)
    {
        $this->addAttribute('min', $min);
    }

    public function setMinlength(int $minLength)
    {
        $this->addAttribute('minlength', $minLength);
    }

    public function multiple()
    {
        $this->addAttribute('multiple');
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }

    public function setPattern(string $pattern)
    {
        $this->addAttribute('pattern', $pattern);
    }

    public function setPlaceholder(string $placeholder)
    {
        $this->addAttribute('placeholder', $placeholder);
    }

    public function readonly()
    {
        $this->addAttribute('readonly');
    }

    public function required()
    {
        $this->addAttribute('required');
    }

    public function setSize(int $size)
    {
        $this->addAttribute('size', $size);
    }

    public function setSrc(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function setStep(int $step)
    {
        $this->addAttribute('step', $step);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }

    public function setValue(string $value)
    {
        $this->addAttribute('value', $value);
    }

    public function setWidth(int $pixels)
    {
        $this->addAttribute('width', $pixels);
    }
}