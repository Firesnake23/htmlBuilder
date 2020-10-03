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
use firesnake\htmlBuilder\body\Cite;
use firesnake\htmlBuilder\body\Code;
use firesnake\htmlBuilder\body\Col;
use firesnake\htmlBuilder\body\Data;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{

    public function testData()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $data = new Data('content');
        $data->setValue('001');
        $div->addChild($data);

        $this->assertEquals(TestUtils::fileContent('DataTest.html'), $page->create());
    }
}