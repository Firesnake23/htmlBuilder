<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Table;
use firesnake\htmlBuilder\body\Tbody;
use firesnake\htmlBuilder\body\Td;
use firesnake\htmlBuilder\body\Template;
use firesnake\htmlBuilder\body\Textarea;
use firesnake\htmlBuilder\body\Tfoot;
use firesnake\htmlBuilder\body\Th;
use firesnake\htmlBuilder\body\Thead;
use firesnake\htmlBuilder\body\Tr;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class TextareaTest extends TestCase
{

    public function testTextarea()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $textarea = new Textarea();
        $textarea->autofocus();
        $textarea->setCols(50);
        $textarea->setDirname('somedir');
        $textarea->disable();
        $textarea->setForm('formid');
        $textarea->setMaxlength(255);
        $textarea->setName('name');
        $textarea->setPlaceholder('placeholder');
        $textarea->readonly();
        $textarea->required();
        $textarea->setRows(10);
        $textarea->setWrap('hard');

        $div->addChild($textarea);

        $this->assertEquals(TestUtils::fileContent('TextareaTest.html'), $page->create());
    }
}