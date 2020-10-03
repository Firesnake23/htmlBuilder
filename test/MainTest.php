<?php

namespace firesnake\htmlBuilder\test;

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
use firesnake\htmlBuilder\body\Main;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{

    public function testMain()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $main = new Main();
        $div->addChild($main);

        $this->assertEquals(TestUtils::fileContent('MainTest.html'), $page->create());
    }
}