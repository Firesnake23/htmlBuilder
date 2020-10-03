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
use firesnake\htmlBuilder\body\Rt;
use firesnake\htmlBuilder\body\Ruby;
use firesnake\htmlBuilder\body\S;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\body\Select;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class SelectTest extends TestCase
{

    public function testSelect()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $select = new Select();
        $select->autofocus();
        $select->disable();
        $select->setForm('myForm');
        $select->multiple();
        $select->setName('select');
        $select->required();
        $select->setSize(3);

        $div->addChild($select);

        $this->assertEquals(TestUtils::fileContent('SelectTest.html'), $page->create());
    }
}