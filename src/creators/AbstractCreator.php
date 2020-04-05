<?php


namespace firesnake\htmlBuilder\creators;


use firesnake\htmlBuilder\HtmlElement;

abstract class AbstractCreator
{
    const TAB = "\t";

    /**@var HtmlElement $element */
    protected $element = null;
    /**@var boolean $contentBeforeChildren */
    protected $contentBeforeChildren = true;
    /**@var boolean $contentInline */
    protected $contentInline = false;

    public abstract function create(HtmlElement $element): string;

    public function createTabs(): string
    {
        $tabs = '';
        for($i = 0; $i < $this->element->getLevel(); $i++) {
            $tabs .= self::TAB;
        }
        return $tabs;
    }

    public function setContentBeforeChildren(bool $before) {
        $this->contentBeforeChildren = $before;
    }

    public function setContentInline(bool $inline)
    {
        $this->contentInline = $inline;
    }

    public function getAttributeString(): string
    {
        $attributes = $this->element->getAttributes();
        $attributeString = '';
        foreach($attributes as $attribute) {
            $attributeString .= $attribute->create();
        }
        return $attributeString;
    }
}