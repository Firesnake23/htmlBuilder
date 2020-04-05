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
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class LegendTest extends TestCase
{

    public function testLegend()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $legend = new Legend('content');
        $div->addChild($legend);

        $this->assertEquals(TestUtils::fileContent('LegendTest.html'), $page->create());
    }
}