<?php


namespace firesnake\htmlBuilder\creators;


use firesnake\htmlBuilder\HtmlElement;

/**
 * Class DefaultCreator
 * Creates normal HTML, opens tag, then the content is intended on the next line,
 * and then below the opening tag, the close tag is written
 * @package firesnake\htmlBuilder\creators
 */
class DefaultCreator extends AbstractCreator
{

    public function create(HtmlElement $element): string
    {
        $this->element = $element;
        $html = '';
        $html .= $this->createTabs();
        if ($this->element->getLevel() == 0) {
            $html .= '<!DOCTYPE html>' . PHP_EOL;
        }

        $elementName = $this->element->getName();
        $html .= '<' . $elementName;
        $html .= $this->getAttributeString();
        if ($elementName != '!--' && $elementName != '--') {
            $html .= '>';
        }
        if (!$this->contentInline) {
            $html .= PHP_EOL;
        }

        if ($this->contentBeforeChildren) {
            $content = $this->element->getContent();
            if ($content != '') {
                if (!$this->contentInline) {
                    $html .= $this->createTabs() . self::TAB;
                }
                $html .= $content;
                if (!$this->contentInline || $this->element->hasChildren()) {
                    $html .= PHP_EOL;
                }
            }
        }

        $html .= $this->addChildren();

        if (!$this->contentBeforeChildren) {
            $html .= $this->createTabs() . self::TAB;
            $html .= $this->element->getContent() . PHP_EOL;
        }

        if (!$this->contentInline) {
            $html .= $this->createTabs();
        }
        $elementName = $this->element->getName();
        if ($elementName != '!--' && $elementName != '--') {
            $html .= '</' . $elementName;
        }
        $html .= '>';
        $html .= PHP_EOL;
        return $html;
    }

    private function addChildren()
    {
        $childStr = '';
        foreach ($this->element->getChildren() as $child) {
            $childStr .= $child->create();
        }
        return $childStr;
    }
}