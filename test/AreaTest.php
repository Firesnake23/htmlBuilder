<?php


namespace firesnake\htmlBuilder\test;


use firesnake\htmlBuilder\body\Area;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Img;
use firesnake\htmlBuilder\body\Map;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class AreaTest extends TestCase
{
    public function testBase() {
        $page = new Page();
        $body = $page->getBody();

        $div = new Div();
        $body->addChild($div);
        
        $img = new Img('planets.gif');
        $img->setWidth(145);
        $img->setHeight(126);
        $img->setAlt('Planets');
        $img->setUseMap('#planetmap');
        $div->addChild($img);

        $map = new Map();
        $map->setName('planetmap');
        $div->addChild($map);

        $area1 = new Area();
        $area1->setShape('rect');
        $area1->setCoords('0,0,82,126');
        $area1->setHref('sun.htm');
        $area1->setAlt('Sun');

        $area2 = new Area();
        $area2->setShape('circle');
        $area2->setCoords('90,58,3');
        $area2->setHref('mercury.htm');
        $area2->setAlt('Mercury');

        $area3 = new Area();
        $area3->setShape('circle');
        $area3->setCoords('124,58,8');
        $area3->setHref('venus.htm');
        $area3->setAlt('Venus');

        $map->addChild($area1);
        $map->addChild($area2);
        $map->addChild($area3);

        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('AreaTest.html'), $html);
    }

    public function testAreaAttributes() {
        $page = new Page();
        $body = $page->getBody();

        $div = new Div();
        $body->addChild($div);

        $img = new Img('planets.gif');
        $img->setCrossorigin('use-credentials');
        $img->isMap();
        $img->setLongDesc('Longdescription');
        $img->setReferrerPolicy('same-origin');
        $img->setSizes('45,20');
        $img->setSrcset('someSources');
        $div->addChild($img);

        $area1 = new Area();
        $area1->setDownload('sample.png');
        $area1->setHrefLang('en');
        $area1->setMedia('screen');
        $area1->setRel('contents');
        $area1->setTarget('_blank');
        $area1->setType('text/img');

        $map = new Map();
        $div->addChild($map);
        $map->setName('planetmap');
        $map->addChild($area1);

        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('AreaTestAttributes.html'), $html);
    }
}