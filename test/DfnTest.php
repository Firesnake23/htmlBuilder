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
use firesnake\htmlBuilder\body\Canvas;
use firesnake\htmlBuilder\body\Caption;
use firesnake\htmlBuilder\body\Cite;
use firesnake\htmlBuilder\body\Code;
use firesnake\htmlBuilder\body\Col;
use firesnake\htmlBuilder\body\Data;
use firesnake\htmlBuilder\body\Dd;
use firesnake\htmlBuilder\body\Del;
use firesnake\htmlBuilder\body\Dfn;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class DfnTest extends TestCase
{

    public function testDfn()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $dfn = new Dfn('content');
        $div->addChild($dfn);

        $this->assertEquals(TestUtils::fileContent('DfnTest.html'), $page->create());
    }
}