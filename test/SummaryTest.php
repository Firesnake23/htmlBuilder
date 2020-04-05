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
use firesnake\htmlBuilder\body\Span;
use firesnake\htmlBuilder\body\Strong;
use firesnake\htmlBuilder\body\Style;
use firesnake\htmlBuilder\body\Sub;
use firesnake\htmlBuilder\body\Summary;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class SummaryTest extends TestCase
{

    public function testSummary()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $summary = new Summary('content');

        $div->addChild($summary);

        $this->assertEquals(TestUtils::fileContent('SummaryTest.html'), $page->create());
    }
}