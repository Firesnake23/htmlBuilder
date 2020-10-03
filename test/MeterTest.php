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
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class MeterTest extends TestCase
{

    public function testMeter()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $meter1 = new Meter();
        $meter1->setId('disk_c');
        $meter1->setValue(2);
        $meter1->setMin(0);
        $meter1->setMax(10);
        $meter1->setForm('hallelujah');
        $meter1->setContent('2 out of 10');

        $meter2 = new Meter();
        $meter2->setId('yinyang');
        $meter2->setValue(0.3);
        $meter2->setHigh(0.9);
        $meter2->setLow(0.1);
        $meter2->setOptimum(0.5);

        $div->addChild($meter1);
        $div->addChild(new Br());
        $div->addChild($meter2);

        $this->assertEquals(TestUtils::fileContent('MeterTest.html'), $page->create());
    }
}