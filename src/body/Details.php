<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Details extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
       return 'details';
    }

    public function open()
    {
        $this->addAttribute('open');
    }
}