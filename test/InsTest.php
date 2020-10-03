<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Ins;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class InsTest extends TestCase
{

    public function testIns()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $ins = new Ins('content');
        $ins->setCite('http://localhost');
        $ins->setDatetime('2020-04-05T00:35:57');
        $div->addChild($ins);

        $this->assertEquals(TestUtils::fileContent('InsTest.html'), $page->create());
    }
}