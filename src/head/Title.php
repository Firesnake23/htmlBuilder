<?php


namespace firesnake\htmlBuilder\head;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Title extends HtmlElement
{

    public function __construct()
    {
        $this->setCreator(null);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
       return "title";
    }

    public function setCreator(?AbstractCreator $creator)
    {
        parent::setCreator(new OneLineCreator());
    }
}