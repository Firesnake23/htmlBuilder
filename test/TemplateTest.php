<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Table;
use firesnake\htmlBuilder\body\Tbody;
use firesnake\htmlBuilder\body\Td;
use firesnake\htmlBuilder\body\Template;
use firesnake\htmlBuilder\body\Tfoot;
use firesnake\htmlBuilder\body\Th;
use firesnake\htmlBuilder\body\Thead;
use firesnake\htmlBuilder\body\Tr;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{

    public function testTemplate()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $template = new Template();

        $div->addChild($template);

        $this->assertEquals(TestUtils::fileContent('TemplateTest.html'), $page->create());
    }
}