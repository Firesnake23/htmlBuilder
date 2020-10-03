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
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class KbdTest extends TestCase
{

    public function testKbd()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $kbd = new Kbd('content');
        $div->addChild($kbd);

        $this->assertEquals(TestUtils::fileContent('KbdTest.html'), $page->create());
    }
}