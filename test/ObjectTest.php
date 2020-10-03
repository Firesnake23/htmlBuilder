<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class ObjectTest extends TestCase
{

    public function testObject()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $object = new ObjectHtml();
        $object->setData('helloworld.swf');
        $object->setForm('someForm');
        $object->setHeight(400);
        $object->setName('objName');
        $object->setType('text/swf');
        $object->setUsemap('someMap');
        $object->setWidth(400);

        $div->addChild($object);

        $this->assertEquals(TestUtils::fileContent('ObjectTest.html'), $page->create());
    }
}