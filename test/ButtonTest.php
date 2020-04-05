<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\Bdi;
use firesnake\htmlBuilder\body\Bdo;
use firesnake\htmlBuilder\body\Blockquote;
use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Button;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class ButtonTest extends TestCase
{

    public function testButton()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $button = new Button();
        $button->setContent('Click Me!');
        $button->setType('button');
        $div->addChild($button);

        $this->assertEquals(TestUtils::fileContent('ButtonTest.html'), $page->create());
    }

    public function testButtonAllAttributes()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $button = new Button();
        $button->autofocus();
        $button->disable();
        $button->setForm('testForm');
        $button->setFormaction('http://localhost');
        $button->setFormenctype('multipart/form-data');
        $button->setFormmethod('post');
        $button->formnovalidate();
        $button->setFormtarget('_blank');
        $button->setName('nameBtn');
        $button->setType('reset');
        $button->setValue('have a value');
        $button->setContent('Click Me!');
        $div->addChild($button);

        $this->assertEquals(TestUtils::fileContent('ButtonTestAllAttributes.html'), $page->create());
    }
}