<?php


namespace firesnake\htmlBuilder\test;


use firesnake\htmlBuilder\body\Abbr;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class AbbrTest extends TestCase
{
    public function testAbbr()
    {
        $page = new Page();
        $body = $page->getBody();
        $abbr = new Abbr('SVP', 'Schweizer Volkspartei');
        $div = new Div();
        $div->setContent('HEre we have some test. The ' . $abbr->create() .' has a foolish idea');
        $body->addChild($div);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('AbbrTest.html'), $html);
    }
}