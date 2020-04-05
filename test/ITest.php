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
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class ITest extends TestCase
{

    public function testI()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $i = new I('content');
        $div->addChild($i);

        $this->assertEquals(TestUtils::fileContent('ITest.html'), $page->create());
    }
}