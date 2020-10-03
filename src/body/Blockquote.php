<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;
use SebastianBergmann\CodeCoverage\Report\Html\HTMLTest;

class Blockquote extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setContent($content);
    }
    
    public function getName(): string
    {
        return 'blockquote';
    }
    
    public function setCite(string $source) 
    {
        $this->addAttribute('cite', $source);
    }
}