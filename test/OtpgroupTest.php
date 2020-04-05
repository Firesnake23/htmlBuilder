<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Ol;
use firesnake\htmlBuilder\body\Optgroup;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class OptgroupTest extends TestCase
{

    public function testOption()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $optgroup = new Optgroup();
        $optgroup->setLabel('test');
        $optgroup->disable();

        $div->addChild($optgroup);

        $this->assertEquals(TestUtils::fileContent('OptgroupTest.html'), $page->create());
    }
}