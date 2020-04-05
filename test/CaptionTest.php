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
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class CaptionTest extends TestCase
{

    public function testCaption()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $caption = new Caption('I\'m a caption');
        $div->addChild($caption);

        $this->assertEquals(TestUtils::fileContent('CaptionTest.html'), $page->create());
    }
}