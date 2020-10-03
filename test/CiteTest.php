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
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class CiteTest extends TestCase
{

    public function testCite()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $cite = new Cite('I\'m a cite');
        $div->addChild($cite);

        $this->assertEquals(TestUtils::fileContent('CiteTest.html'), $page->create());
    }
}