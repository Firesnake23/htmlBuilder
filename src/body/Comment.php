<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Comment extends HtmlElement
{
    private $returnClosed = false;

    public function __construct(string $content)
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
        $this->setContent($content);
    }

    public function getName(): string
    {
        if(!$this->returnClosed) {
            $this->returnClosed = true;
            return '!--';
        }
        $this->returnClosed = false;
        return '--';
    }
}