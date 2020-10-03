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
use firesnake\htmlBuilder\body\Iframe;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class IframeTest extends TestCase
{

    public function testH()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $iframe = new Iframe('http://localhost');
        $iframe->setAllowFullscreen();
        $iframe->setAllowpaymentrequest();
        $iframe->setHeight(600);
        $iframe->setName('iFrame');
        $iframe->setReferrerpolicy('no-referrer');
        $iframe->setSandbox('allow-forms');

        $src = new I('Hello World');

        $iframe->setSrcdoc($src->create());
        $iframe->setWidth(800);
        $div->addChild($iframe);

        $this->assertEquals(TestUtils::fileContent('IframeTest.html'), $page->create());
    }
}