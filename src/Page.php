<?php


namespace firesnake\htmlBuilder;

use firesnake\htmlBuilder\head\Head;
use firesnake\htmlBuilder\body\Body;

class Page
{
    /**@var Html $html */
    private $html;
    /**@var Head $head */
    private $head;
    /**@var Body $body */
    private $body;

    public function __construct()
    {
        $this->html = new Html();
        $this->head = new Head();
        $this->body = new Body();

        $this->html->addChild($this->head);
        $this->html->addChild($this->body);
    }

    public function getHtml(): Html
    {
        return $this->html;
    }

    public function getHead(): Head
    {
        return $this->head;
    }

    public function getBody(): Body
    {
        return $this->body;
    }

    public function create(): string
    {
        return $this->html->create();
    }
}