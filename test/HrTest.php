<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Hr;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class HrTest extends TestCase
{

    public function testH()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $hr = new Hr();
        $div->addChild($hr);
        $div->addChild($hr);
        $div->addChild($hr);

        $this->assertEquals(TestUtils::fileContent('HrTest.html'), $page->create());
    }
}