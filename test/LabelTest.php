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
use firesnake\htmlBuilder\body\Label;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class LabelTest extends TestCase
{

    public function testLabel()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $label = new Label('content');
        $label->setFor('username');
        $label->setForm('someForm');
        $div->addChild($label);

        $this->assertEquals(TestUtils::fileContent('LabelTest.html'), $page->create());
    }
}