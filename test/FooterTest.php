<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\body\Fieldset;
use firesnake\htmlBuilder\body\Figure;
use firesnake\htmlBuilder\body\Footer;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class FooterTest extends TestCase
{

    public function testFooter()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $footer = new Footer();
        $div->addChild($footer);

        $this->assertEquals(TestUtils::fileContent('FooterTest.html'), $page->create());
    }
}