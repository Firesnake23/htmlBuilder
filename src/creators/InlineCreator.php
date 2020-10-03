<?php


namespace firesnake\htmlBuilder\creators;


use firesnake\htmlBuilder\HtmlElement;

/**
 * Creates an inline element without any indentation. Children are ignored
 *
 * Class InlineCreator
 * @package firesnake\htmlBuilder\creators
 */
class InlineCreator extends AbstractCreator
{

    public function create(HtmlElement $element): string
    {
        $this->element = $element;
        $html = '';
        $html .= $this->createTabs();
        $elementName = $this->element->getName();
        $html .= '<' . $elementName;
        $html .= $this->getAttributeString();
        if ($elementName != '!--' && $elementName != '--') {
            $html .= '>';
        }
        $html .= $this->element->getContent();
        $elementName = $this->element->getName();
        if ($elementName != '!--' && $elementName != '--') {
            $html .= '</' . $elementName;
        }
        $html .= '>';
        return $html;
    }
}