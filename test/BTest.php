<?php


namespace firesnake\htmlBuilder\test;


use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\B;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class BTest extends TestCase
{
    public function testB()
    {
        $page = new Page();
        $b = new B();
        $b->setContent('and this is bold text');

        $div = new Div();
        $div->addChild($b);

        $page->getBody()->addChild($div);
        $this->assertEquals(TestUtils::fileContent('BTest.html'), $page->create());
    }
}