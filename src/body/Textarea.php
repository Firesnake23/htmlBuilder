<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Textarea extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getName(): string
    {
        return 'textarea';
    }

    public function autofocus()
    {
        $this->addAttribute('autofocus');
    }

    public function setCols(int $cols)
    {
        $this->addAttribute('cols', $cols);
    }

    public function setDirname(string $path)
    {
        $this->addAttribute('dirname', $path);
    }

    public function disable()
    {
        $this->addAttribute('disabled');
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }

    public function setMaxlength(int $maxLength)
    {
        $this->addAttribute('maxlength', $maxLength);
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
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

    public function setRows(int $rows)
    {
        $this->addAttribute('rows', $rows);
    }

    public function setWrap(string $wrap)
    {
        $this->addAttribute('wrap', $wrap);
    }
}