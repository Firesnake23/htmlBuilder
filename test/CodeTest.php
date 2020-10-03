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
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class CodeTest extends TestCase
{

    public function testCode()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $code = new Code();
        $code->setContent('I\'m a code');
        $div->addChild($code);

        $this->assertEquals(TestUtils::fileContent('CodeTest.html'), $page->create());
    }
}