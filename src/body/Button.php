<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Button extends HtmlElement
{

    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'button';
    }

    public function autofocus()
    {
        $this->addAttribute('autofocus');
    }

    public function disable()
    {
        $this->addAttribute('disabled');
    }

    public function setForm(string $id)
    {
        $this->addAttribute('form', $id);
    }
    
    public function setFormaction(string $action)
    {
        $this->addAttribute('formaction', $action);
    }

    public function setFormenctype(string $enctype)
    {
        $this->addAttribute('formenctype', $enctype);
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
    
    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }
    
    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }
    
    public function setValue(string $value)
    {
        $this->addAttribute('value', $value);
    }
}