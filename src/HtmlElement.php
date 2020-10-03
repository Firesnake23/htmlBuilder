<?php


namespace firesnake\htmlBuilder;


use firesnake\htmlBuilder\attributes\AbstractAttribute;
use firesnake\htmlBuilder\attributes\Attribute;
use firesnake\htmlBuilder\attributes\AttributeAlreadyExistsException;
use firesnake\htmlBuilder\attributes\Flag;
use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\DefaultCreator;

abstract class HtmlElement
{
    const DIR_LTR = 'ltr';
    const DIR_RTL = 'rtl';
    const DIR_AUTO = 'auto';

    const DROPZONE_COPY = 'copy';
    const DROPZONE_MOVE = 'move';
    const DROPZONE_LINK = 'link';

    const TRANSLATE_YES = 'yes';
    const TRANSLATE_NO = 'no';

    /**@var self $parent */
    private $parent;
    /**@var int $level */
    private $level = 0;
    /**@var AbstractCreator $creator */
    private $creator;
    /**@var string $content */
    private $content = '';
    /**@var HtmlElement[] $children */
    private $children = [];
    /**@var AbstractAttribute[] $attributes */
    private $attributes = [];

    public function __construct()
    {
        $this->creator = new DefaultCreator();
    }

    /**
     * This function must return the name of the HtmlTag
     * @return string
     */
    public abstract function getName(): string;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getParent(): ?HtmlElement
    {
        return $this->parent;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function create(): string
    {
        return $this->creator->create($this);
    }

    public function setCreator(AbstractCreator $creator)
    {
        $this->creator = $creator;
    }

    public function getCreator(): AbstractCreator
    {
        return $this->creator;
    }

    public function addChild(HtmlElement $child)
    {
        $child->parent = $this;
        $child->setLevel($this->getLevel() + 1);
        $this->children[count($this->children)] = $child;
    }

    private function setLevel(int $level) {
        $this->level = $level;
        foreach($this->children as $child) {
            $child->setLevel($this->getLevel() + 1);
        }
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function hasChildren()
    {
        return count($this->children) > 0;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Adds an {@link Attribute} to the current Element<br>
     * If the value is null then {@link Flag} is used
     *
     *
     * @param string $name
     * @param string|null $value
     */
    public final function addAttribute(string $name, ?string $value = null)
    {
        if ($value === null) {
            $this->addAttributeSave(new Flag($name));
            return;
        }
        $this->addAttributeSave(new Attribute($name, $value));
    }

    private function addAttributeSave(AbstractAttribute $attribute)
    {
        foreach ($this->attributes as $existingAttribute) {
            if ($existingAttribute->getName() == $attribute->getName()) {
                throw new AttributeAlreadyExistsException($attribute->getName());
            }
        }
        $this->attributes[count($this->attributes)] = $attribute;
    }

    protected final function parseBoolean(bool $boolean): string
    {
        if ($boolean) {
            return 'true';
        }
        return 'false';
    }

    //Attributes
    public function setAccesskey(string $value)
    {
        $this->addAttribute('accesskey', $value);
    }

    public function setClassName(string $value)
    {
        $this->addAttribute('class', $value);
    }

    public function setContentEditable(bool $value)
    {
        $text = $this->parseBoolean($value);
        $this->addAttribute('contenteditable', $text);
    }

    /**
     * Sets the direction of the text. Must be one of the following constants {@link HtmlElement}:
     * <ul>
     *  <li>{@link HtmlElement::DIR_LTR}</li>
     *  <li>{@link HtmlElement::DIR_RTL}</li>
     *  <li>{@link HtmlElement::DIR_AUTO}</li>
     * </ul>
     * @param string $value
     */
    public function setDirection(string $value)
    {
        if ($value == self::DIR_AUTO || $value == self::DIR_LTR || $value == self::DIR_RTL) {
            $this->addAttribute('dir', $value);
        }
    }

    /**
     * Adds an attribute with "data-" as prefix
     *
     * @param string $name
     * @param string $value
     */
    public function addDataAttribute(string $name, string $value)
    {
        $this->addAttribute('data-' . $name, $value);
    }

    public function setDraggable(bool $value)
    {
        $this->addAttribute('draggable', $this->parseBoolean($value));
    }

    /**
     * Sets drop behavior of the Element. Must be one of the following constants {@link HtmlElement}:
     * <ul>
     *  <li>{@link HtmlElement::DROPZONE_COPY}</li>
     *  <li>{@link HtmlElement::DROPZONE_LINK}</li>
     *  <li>{@link HtmlElement::DROPZONE_LINK}</li>
     * </ul>
     * @param string $value
     */
    public function setDropzone($value)
    {
        if ($value == self::DROPZONE_LINK || $value == self::DROPZONE_COPY || $value == self::DROPZONE_MOVE) {
            $this->addAttribute('dropzone', $value);
        }
    }

    public function hide()
    {
        $this->addAttribute('hidden');
    }

    public function setId(string $value)
    {
        $this->addAttribute('id', $value);
    }

    public function setLang(string $value)
    {
        $this->addAttribute('lang', $value);
    }

    public function setSpellcheck(bool $value)
    {
        $this->addAttribute('spellcheck', $this->parseBoolean($value));
    }

    public function setStyle(string $value)
    {
        $this->addAttribute('style', $value);
    }

    public function setTabindex(int $value)
    {
        $this->addAttribute('tabindex', $value);
    }

    public function setTitle(string $value)
    {
        $this->addAttribute('title', $value);
    }

    /**
     * Sets drop behavior of the Element. Must be one of the following constants {@link HtmlElement}:
     * <ul>
     *  <li>{@link HtmlElement::TRANSLATE_NO}</li>
     *  <li>{@link HtmlElement::TRANSLATE_YES}</li>
     * </ul>
     * @param string $value
     */
    public function setTranslate(string $value)
    {
        if ($value == self::TRANSLATE_YES || $value == self::TRANSLATE_NO) {
            $this->addAttribute('translate', $value);
        }
    }
}