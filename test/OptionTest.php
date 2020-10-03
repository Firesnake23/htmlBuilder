<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Ol;
use firesnake\htmlBuilder\body\Optgroup;
use firesnake\htmlBuilder\body\Option;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class OptionTest extends TestCase
{

    public function testOption()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $option = new Option();
        $option->disable();
        $option->setLabel('opt1');
        $option->select();
        $option->setValue('5');
        $option->setContent('Opt');

        $div->addChild($option);

        $this->assertEquals(TestUtils::fileContent('OptionTest.html'), $page->create());
    }
}