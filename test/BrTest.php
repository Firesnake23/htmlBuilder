<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\Bdi;
use firesnake\htmlBuilder\body\Bdo;
use firesnake\htmlBuilder\body\Blockquote;
use firesnake\htmlBuilder\body\Br;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class BrTest extends TestCase {

    public function testBr() {
        $page = new Page();
        
        $div = new Div();
        $page->getBody()->addChild($div);

        $br = new Br();
        $div->addChild($br);
        $div->addChild($br);
        $div->addChild($br);

        $this->assertEquals(TestUtils::fileContent('BrTest.html'), $page->create());
    }
}