<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\body\Embed;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class EmbedTest extends TestCase
{

    public function testEmbed()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $embed = new Embed('helloworld.swf');
        $embed->setType('application/vnd.adobe.flash-movie');
        $embed->setHeight(600);
        $embed->setWidth(800);
        $div->addChild($embed);

        $this->assertEquals(TestUtils::fileContent('EmbedTest.html'), $page->create());
    }
}