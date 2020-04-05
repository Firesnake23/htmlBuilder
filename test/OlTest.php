<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Ol;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class OlTest extends TestCase
{

    public function testOl()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $ol = new Ol();
        $ol->reverse();
        $ol->setStart(0);
        $ol->setType('1');

        $div->addChild($ol);

        $this->assertEquals(TestUtils::fileContent('OlTest.html'), $page->create());
    }
}