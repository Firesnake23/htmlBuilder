<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;

class Th extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
        $this->setContent($content);
    }

    public function getName(): string
    {
        return 'th';
    }

    public function setAbbr(string $abbr)
    {
        $this->addAttribute('abbr', $abbr);
    }

    public function setColspan(int $colspan)
    {
        $this->addAttribute('colspan', $colspan);
    }

    public function setHeaders(string $headerId)
    {
        $this->addAttribute('headers', $headerId);
    }

    public function setRowspan(int $rowspan)
    {
        $this->addAttribute('rowspan', $rowspan);
    }

    public function setScope(String $scope)
    {
        $this->addAttribute('scope', $scope);
    }
}