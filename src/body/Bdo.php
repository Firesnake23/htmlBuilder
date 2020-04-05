<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Bdo extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setContent($content);
    }

    public function getName(): string
    {
        return 'bdo';
    }

    /**
     * <li> rtl </li>
     * <li> ltr </li>
     *
     * @param string $value
     */
    public function setDir(string $value)
    {
        $this->addAttribute('dir', $value);
    }
}