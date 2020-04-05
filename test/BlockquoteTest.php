<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\Bdi;
use firesnake\htmlBuilder\body\Bdo;
use firesnake\htmlBuilder\body\Blockquote;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class BlockquoteTest extends TestCase {

    public function testBlockqote() {
        $page = new Page();
        
        $div = new Div();
        $page->getBody()->addChild($div);

        $blockquote = new Blockquote('For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.');
        $blockquote->setCite('http://www.worldwildlife.org/who/index.html');
        $div->addChild($blockquote);

        $this->assertEquals(TestUtils::fileContent('BlockquoteTest.html'), $page->create());
    }
}