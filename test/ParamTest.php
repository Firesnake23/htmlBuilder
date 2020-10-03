<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Param;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class ParamTest extends TestCase
{

    public function testParam()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $p = new Param('test', 'helloWorld');

        $div->addChild($p);

        $this->assertEquals(TestUtils::fileContent('ParamTest.html'), $page->create());
    }
}