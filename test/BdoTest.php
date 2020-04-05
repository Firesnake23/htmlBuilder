<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\Bdi;
use firesnake\htmlBuilder\body\Bdo;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class BdoTest extends TestCase {

    public function testBdo() {
        $page = new Page();
        
        $div = new Div();
        $page->getBody()->addChild($div);

        $bdo = new Bdo('Some test');
        $bdo->setDir('rtl');
        $div->addChild($bdo);

        $this->assertEquals(TestUtils::fileContent('BdoTest.html'), $page->create());
    }
}