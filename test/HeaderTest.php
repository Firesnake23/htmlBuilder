<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\body\Fieldset;
use firesnake\htmlBuilder\body\Figure;
use firesnake\htmlBuilder\body\Footer;
use firesnake\htmlBuilder\body\Header;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class HeaderTest extends TestCase
{

    public function testHeader()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $header = new Header();
        $div->addChild($header);

        $this->assertEquals(TestUtils::fileContent('HeaderTest.html'), $page->create());
    }
}