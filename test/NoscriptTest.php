<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Br;
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
use firesnake\htmlBuilder\body\Meter;
use firesnake\htmlBuilder\body\Nav;
use firesnake\htmlBuilder\body\Noscript;
use firesnake\htmlBuilder\body\Script;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\head\Meta;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class NoscriptTest extends TestCase
{

    public function testNoscript()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $script = new Script();
        $script->async();
        $script->setCharset('utf-8');
        $script->defer();
        $script->setSrc('external');
        $script->setType('text/javascript');

        $noscript = new Noscript('No javascript');

        $div->addChild($script);
        $div->addChild($noscript);

        $this->assertEquals(TestUtils::fileContent('NoscriptTest.html'), $page->create());
    }
}