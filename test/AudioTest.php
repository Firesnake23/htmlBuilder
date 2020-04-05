<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Aside;
use firesnake\htmlBuilder\body\Audio;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class AudioTest extends TestCase {

    public function testAside() {
        $page = new Page();
        $audio = new Audio('sample.mp3');
        $audio->controls();
        $audio->autoplay();
        $audio->loop();
        $audio->mute();
        $audio->setPreload('auto');

        $div = new Div();
        $div->addChild($audio);

        $page->getBody()->addChild($div);
        $this->assertEquals(TestUtils::fileContent('AudioTest.html'), $page->create());
    }
}