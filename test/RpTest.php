<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Ol;
use firesnake\htmlBuilder\body\Optgroup;
use firesnake\htmlBuilder\body\Output;
use firesnake\htmlBuilder\body\P;
use firesnake\htmlBuilder\body\Q;
use firesnake\htmlBuilder\body\Rp;
use firesnake\htmlBuilder\body\Rt;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class RpTest extends TestCase
{

    public function testRp()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $rp = new Rp();
        $rp->setContent('content');

        $div->addChild($rp);

        $this->assertEquals(TestUtils::fileContent('RpTest.html'), $page->create());
    }
}