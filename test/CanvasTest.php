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
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class CanvasTest extends TestCase
{

    public function testCanvas()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $canvas = new Canvas();
        $canvas->setHeight(600);
        $canvas->setWidth(800);
        $div->addChild($canvas);

        $this->assertEquals(TestUtils::fileContent('CanvasTest.html'), $page->create());
    }
}