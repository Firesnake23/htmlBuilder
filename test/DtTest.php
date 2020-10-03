<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Dt;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class DtTest extends TestCase
{

    public function testDt()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $dt = new Dt('content');
        $div->addChild($dt);

        $this->assertEquals(TestUtils::fileContent('DtTest.html'), $page->create());
    }
}