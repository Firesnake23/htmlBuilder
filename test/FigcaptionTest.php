<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\body\Fieldset;
use firesnake\htmlBuilder\body\Figcaption;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class FigcaptionTest extends TestCase
{

    public function testFigcaption()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $figcaption = new Figcaption('content');
        $div->addChild($figcaption);

        $this->assertEquals(TestUtils::fileContent('FigcaptionTest.html'), $page->create());
    }
}