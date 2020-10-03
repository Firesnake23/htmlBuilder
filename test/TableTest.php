<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Table;
use firesnake\htmlBuilder\body\Tbody;
use firesnake\htmlBuilder\body\Td;
use firesnake\htmlBuilder\body\Tfoot;
use firesnake\htmlBuilder\body\Th;
use firesnake\htmlBuilder\body\Thead;
use firesnake\htmlBuilder\body\Tr;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{

    public function testTable()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $table = new Table();

        $thead = new Thead();

        $headRow = new Tr();

        $heading = new Th('Head1');
        $heading->setAbbr('h1');
        $heading->setColspan(1);
        $heading->setHeaders('headers');
        $heading->setRowspan(1);
        $heading->setScope('col');

        $tbody = new Tbody();

        $contentRow = new Tr();

        $contentData = new Td('Data1');
        $contentData->setColspan('1');
        $contentData->setHeaders('headers');
        $contentData->setRowspan(1);

        $tfoot = new Tfoot();

        $thead->addChild($headRow);
        $headRow->addChild($heading);

        $contentRow->addChild($contentData);
        $tbody->addChild($contentRow);

        $table->addChild($thead);
        $table->addChild($tbody);
        $table->addChild($tfoot);

        $div->addChild($table);

        $this->assertEquals(TestUtils::fileContent('TableTest.html'), $page->create());
    }
}