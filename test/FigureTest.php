<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\body\Fieldset;
use firesnake\htmlBuilder\body\Figure;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class FigureTest extends TestCase
{

    public function testFigure()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $figure = new Figure();

        $div->addChild($figure);

        $this->assertEquals(TestUtils::fileContent('FigureTest.html'), $page->create());
    }
}