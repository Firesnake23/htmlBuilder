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
use firesnake\htmlBuilder\body\Track;
use firesnake\htmlBuilder\body\U;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class TestU extends TestCase
{

    public function testUElement()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $u = new U('content');

        $div->addChild($u);

        $this->assertEquals(TestUtils::fileContent('UTest.html'), $page->create());
    }
}