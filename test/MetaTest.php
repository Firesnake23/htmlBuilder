<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\H1;
use firesnake\htmlBuilder\body\H2;
use firesnake\htmlBuilder\body\H3;
use firesnake\htmlBuilder\body\H4;
use firesnake\htmlBuilder\body\H5;
use firesnake\htmlBuilder\body\H6;
use firesnake\htmlBuilder\body\I;
use firesnake\htmlBuilder\body\Kbd;
use firesnake\htmlBuilder\body\Label;
use firesnake\htmlBuilder\body\Legend;
use firesnake\htmlBuilder\body\Li;
use firesnake\htmlBuilder\body\Mark;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class MetaTest extends TestCase
{

    public function testMeta()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $charset = new Meta();
        $charset->setCharset('utf-8');

        $author = new Meta();
        $author->setName('author');
        $author->setContent('Alexander Lüthi');

        $equiv = new Meta();
        $equiv->setHttpEquiv('refresh');
        $equiv->setContent('30');

        $head = $page->getHead();
        $head->addChild($charset);
        $head->addChild($author);
        $head->addChild($equiv);

        $this->assertEquals(TestUtils::fileContent('MetaTest.html'), $page->create());
    }
}