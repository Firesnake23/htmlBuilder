<?php


namespace firesnake\htmlBuilder\test;


use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\B;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\head\Base;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    public function testBase()
    {
        $page = new Page();
        $base = new Base('localhost');
        $base->setTarget('_blank');

        $page->getHead()->addChild($base);
        $this->assertEquals(TestUtils::fileContent('BaseTest.html'), $page->create());
    }
}