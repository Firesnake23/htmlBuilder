<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Ol;
use firesnake\htmlBuilder\body\Optgroup;
use firesnake\htmlBuilder\body\Output;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{

    public function testOutput()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $output = new Output();
        $output->setFor('test');
        $output->setForm('testForm');
        $output->setName('aName');
        $output->setContent('content');

        $div->addChild($output);

        $this->assertEquals(TestUtils::fileContent('OutputTest.html'), $page->create());
    }
}