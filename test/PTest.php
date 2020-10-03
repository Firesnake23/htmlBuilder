<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Ol;
use firesnake\htmlBuilder\body\Optgroup;
use firesnake\htmlBuilder\body\Output;
use firesnake\htmlBuilder\body\P;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class PTest extends TestCase
{

    public function testP()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $p = new P();
        $p->setContent('content');

        $div->addChild($p);

        $this->assertEquals(TestUtils::fileContent('PTest.html'), $page->create());
    }
}