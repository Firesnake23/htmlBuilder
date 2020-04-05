<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Dialog extends HtmlElement
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
       return 'dialog';
    }

    public function open()
    {
        $this->addAttribute('open');
    }
}