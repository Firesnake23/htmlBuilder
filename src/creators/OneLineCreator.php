<?php


namespace firesnake\htmlBuilder\creators;


use firesnake\htmlBuilder\HtmlElement;

/**
 * Class OneLineCreator
 * Creates an element on one line Children are ignored.
 * Makes new line at the end
 * @package firesnake\htmlBuilder\creators
 */
class OneLineCreator extends AbstractCreator {

    function create(HtmlElement $element): string
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
            $html .= '</';
        }
		$html .= $elementName . '>' . PHP_EOL;
		return $html;
    }
}