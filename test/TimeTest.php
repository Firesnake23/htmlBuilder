<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\P;
use firesnake\htmlBuilder\body\Table;
use firesnake\htmlBuilder\body\Tbody;
use firesnake\htmlBuilder\body\Td;
use firesnake\htmlBuilder\body\Template;
use firesnake\htmlBuilder\body\Tfoot;
use firesnake\htmlBuilder\body\Th;
use firesnake\htmlBuilder\body\Thead;
use firesnake\htmlBuilder\body\Time;
use firesnake\htmlBuilder\body\Tr;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class TimeTest extends TestCase
{

    public function testTime()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $p = new P();
        $p->setCreator(new OnelineCreator());

        $time = new Time('Valentines day');
        $time->setDatetime('2008-02-14 20:00');

        $p->setContent('I have a date on ' . $time->create() . '.');

        $div->addChild($p);

        $this->assertEquals(TestUtils::fileContent('DatetimeTest.html'), $page->create());
    }
}