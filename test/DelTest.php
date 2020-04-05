<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\Bdi;
use firesnake\htmlBuilder\body\Bdo;
use firesnake\htmlBuilder\body\Blockquote;
use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Button;
use firesnake\htmlBuilder\body\Canvas;
use firesnake\htmlBuilder\body\Caption;
use firesnake\htmlBuilder\body\Cite;
use firesnake\htmlBuilder\body\Code;
use firesnake\htmlBuilder\body\Col;
use firesnake\htmlBuilder\body\Data;
use firesnake\htmlBuilder\body\Dd;
use firesnake\htmlBuilder\body\Del;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class DelTest extends TestCase
{

    public function testDel()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $del = new Del('content');
        $del->setCite('http://localhost');
        $del->setDatetime('2020-04-04T02:55:45');
        $div->addChild($del);

        $this->assertEquals(TestUtils::fileContent('DelTest.html'), $page->create());
    }
}