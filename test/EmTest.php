<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class EmTest extends TestCase
{

    public function testEm()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $em = new Em('content');
        $div->addChild($em);

        $this->assertEquals(TestUtils::fileContent('EmTest.html'), $page->create());
    }
}