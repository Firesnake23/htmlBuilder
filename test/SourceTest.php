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
use firesnake\htmlBuilder\body\Source;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class SourceTest extends TestCase
{

    public function testSource()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $source = new Source();
        $source->setSrc('http://localhost');
        $source->setSrcset('http://localhost');
        $source->setMedia('screen');
        $source->setType('img/png');

        $div->addChild($source);

        $this->assertEquals(TestUtils::fileContent('SourceTest.html'), $page->create());
    }
}