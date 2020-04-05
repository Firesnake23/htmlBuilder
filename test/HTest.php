<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\H1;
use firesnake\htmlBuilder\body\H2;
use firesnake\htmlBuilder\body\H3;
use firesnake\htmlBuilder\body\H4;
use firesnake\htmlBuilder\body\H5;
use firesnake\htmlBuilder\body\H6;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class HTest extends TestCase
{

    public function testH()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $h1 = new H1('H1');
        $h2 = new H2('H2');
        $h3 = new H3('H3');
        $h4 = new H4('H4');
        $h5 = new H5('H5');
        $h6 = new H6('H6');

        $div->addChild($h1);
        $div->addChild($h2);
        $div->addChild($h3);
        $div->addChild($h4);
        $div->addChild($h5);
        $div->addChild($h6);

        $this->assertEquals(TestUtils::fileContent('HTest.html'), $page->create());
    }
}