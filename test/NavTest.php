<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\H1;
use firesnake\htmlBuilder\body\H2;
use firesnake\htmlBuilder\body\H3;
use firesnake\htmlBuilder\body\H4;
use firesnake\htmlBuilder\body\H5;
use firesnake\htmlBuilder\body\H6;
use firesnake\htmlBuilder\body\I;
use firesnake\htmlBuilder\body\Kbd;
use firesnake\htmlBuilder\body\Label;
use firesnake\htmlBuilder\body\Legend;
use firesnake\htmlBuilder\body\Li;
use firesnake\htmlBuilder\body\Mark;
use firesnake\htmlBuilder\body\Meter;
use firesnake\htmlBuilder\body\Nav;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class NavTest extends TestCase
{

    public function testNav()
    {
        $page = new Page();

        $nav = new Nav();
        $page->getBody()->addChild($nav);

        $div = new Div();
        $page->getBody()->addChild($div);

        $this->assertEquals(TestUtils::fileContent('NavTest.html'), $page->create());
    }
}