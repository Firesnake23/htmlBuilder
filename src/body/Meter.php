<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Meter extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
    }

    public function getName(): string
    {
        return 'meter';
    }

    public function setForm(string $formId)
    {
        $this->addAttribute('form', $formId);
    }

    public function setHigh(float $high)
    {
        $this->addAttribute('high', $high);
    }

    public function setLow(float $low)
    {
        $this->addAttribute('low', $low);
    }

    public function setMax(float $max)
    {
        $this->addAttribute('max', $max);
    }

    public function setMin(float $min)
    {
        $this->addAttribute('min', $min);
    }

    public function setOptimum(float $optimum)
    {
        $this->addAttribute('optimum', $optimum);
    }

    public function setValue(float $value)
    {
        $this->addAttribute('value', $value);
    }
}