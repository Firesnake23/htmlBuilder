<?php


namespace firesnake\htmlBuilder\creators;


use firesnake\htmlBuilder\HtmlElement;

/**
 * Creates HtmlElements without end Tags
 * Class ShortCreator
 * @package firesnake\htmlBuilder\creators
 */
class ShortCreator extends AbstractCreator
{

    public function create(HtmlElement $element): string
    {
        $this->element = $element;
        $html = '';
        $html .= $this->createTabs();
        $html .= '<';
        $html .= $this->element->getName();
        $html .= $this->getAttributeString();
        $html .= '>';
        $html .= PHP_EOL;
        return $html;
    }
}