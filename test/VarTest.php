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
use firesnake\htmlBuilder\body\Ul;
use firesnake\htmlBuilder\body\VarElement;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class VarTest extends TestCase
{

    public function testVar()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $varElement = new VarElement('content');

        $div->addChild($varElement);


        $this->assertEquals(TestUtils::fileContent('VarTest.html'), $page->create());
    }
}