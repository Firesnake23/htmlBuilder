<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\Bdi;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class BdiTest extends TestCase {

    public function testBdi() {
        $page = new Page();
        
        $div = new Div();
        $div->setContent('Text around bdi');
        $page->getBody()->addChild($div);

        $bdi = new Bdi('Some test');
        $page->getBody()->addChild($bdi);

        $this->assertEquals(TestUtils::fileContent('BdiTest.html'), $page->create());
    }
}