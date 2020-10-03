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
use firesnake\htmlBuilder\head\Link;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{

    public function testLink()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $link = new Link('localhost/style/style.min.css', 'stylesheet', 'text/css');
        $link->setCrossorigin('use-credentials');
        $link->setHreflang('de');
        $link->setMedia('screen');
        $link->setReferrerpolicy('no-referrer');
        $link->setSizes('10x10');
        $page->getHead()->addChild($link);

        $this->assertEquals(TestUtils::fileContent('LinkTest.html'), $page->create());
    }
}