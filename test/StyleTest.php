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
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class StyleTest extends TestCase
{

    public function testSpan()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $style = new Style();

        $div->addChild($style);

        $this->assertEquals(TestUtils::fileContent('StyleTest.html'), $page->create());
    }
}