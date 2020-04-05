<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class AsideTest extends TestCase {

    public function testAside() {
        $page = new Page();
        $aside = new Aside();
        $aside->setContent('Aside Content');

        $div = new Div();
        $div->addChild($aside);

        $page->getBody()->addChild($div);
        $this->assertEquals(TestUtils::fileContent('AsideTest.html'), $page->create());
    }
}