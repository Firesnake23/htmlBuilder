<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\ObjectHtml;
use firesnake\htmlBuilder\body\Ol;
use firesnake\htmlBuilder\body\Optgroup;
use firesnake\htmlBuilder\body\Output;
use firesnake\htmlBuilder\body\P;
use firesnake\htmlBuilder\body\Progress;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class ProgressTest extends TestCase
{

    public function testProgress()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $progress = new Progress();
        $progress->setMax(100);
        $progress->setValue(50);
        $progress->setContent('50%');

        $div->addChild($progress);

        $this->assertEquals(TestUtils::fileContent('ProgressTest.html'), $page->create());
    }
}