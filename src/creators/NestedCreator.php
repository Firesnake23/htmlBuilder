<?php


namespace firesnake\htmlBuilder\creators;


use firesnake\htmlBuilder\HtmlElement;

/**
 * @package firesnake\htmlBuilder\creators
 */
class NestedCreator extends AbstractCreator
{

    public function create(HtmlElement $element): string
    {
        $this->element = $element;
        $html = '';
        if ($this->element->getLevel() == 0) {
            $html .= '<!DOCTYPE html>';
        }

        $elementName = $this->element->getName();
        $html .= '<' . $elementName;
        $html .= $this->getAttributeString();
        if ($elementName != '!--' && $elementName != '--') {
            $html .= '>';
        }

        if ($this->contentBeforeChildren) {
            $content = $this->element->getContent();
            if ($content != '') {
                $html .= $content;
            }
        }

        $html .= $this->addChildren();

        $elementName = $this->element->getName();
        if ($elementName != '!--' && $elementName != '--') {
            $html .= '</' . $elementName;
        }
        $html .= '>';
        return $html;
    }

    private function addChildren()
    {
        $childStr = '';
        foreach ($this->element->getChildren() as $child) {
            $child->setCreator(new NestedCreator());
            $childStr .= $child->create();
        }
        return $childStr;
    }
}