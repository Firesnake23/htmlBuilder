<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\head\Title;
use firesnake\htmlBuilder\HtmlElement;
use firesnake\htmlBuilder\Page;
use firesnake\htmlBuilder\test\TestUtils;
use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    /**
     * @Test
     */
    public function testHtmlFrame()
    {
        $page = new Page();
        $baseHtml = $page->create();
        $this->assertEquals(TestUtils::fileContent('base.html'), $baseHtml);
    }

    public function testTitleFrame()
    {
        $page = new Page();
        $title = new Title();
        $title->setContent('HtmlTest');
        $page->getHead()->addChild($title);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('baseTitle.html'), $html);
    }

    public function testDiv()
    {
        $page = new Page();
        $div = new Div();
        $page->getBody()->addChild($div);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('baseAndDiv.html'), $html);
    }

    public function testDivAllAttribs()
    {
        $page = new Page();
        $div = new Div();
        $div->setAccesskey('a');
        $div->setClassName('test');
        $div->setContentEditable(false);
        $div->addDataAttribute('test', 'Hello world');
        $div->setDirection(HtmlElement::DIR_LTR);
        $div->setDraggable(false);
        $div->setDropzone(HtmlElement::DROPZONE_MOVE);
        $div->setId('test');
        $div->setLang('en');
        $div->setSpellcheck(true);
        $div->setStyle('');
        $div->setTabindex(1);
        $div->setTitle('Test1');
        $div->setTranslate(HtmlElement::TRANSLATE_NO);
        $page->getBody()->addChild($div);

        $hiddenDiv = new Div();
        $hiddenDiv->hide();
        $page->getBody()->addChild($hiddenDiv);

        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('baseAndDivAllAttributes.html'), $html);
    }

    public function testDuplicateAttribute()
    {
        $this->expectException('firesnake\\htmlBuilder\\attributes\\AttributeAlreadyExistsException');
        $page = new Page();
        $body = $page->getBody();
        $body->setId('test');
        $body->setId('exception');
    }

    public function testInheritance()
    {
        $page = new Page();
        $div = new Div();
        $page->getBody()->addChild($div);
        $this->assertEquals(1,count($page->getBody()->getChildren()));
        $this->assertEquals($page->getBody(), $div->getParent());
        $this->assertTrue($page->getBody()->hasChildren());
    }

    public function testCreatorAttributes(){
        $page = new Page();
        $div = new Div();
        $body = $page->getBody();
        $body->setContent('Body');
        $div->setContent('Div 1');
        $div2 = new Div();
        $div2->setContent('Div 2');
        $div->getCreator()->setContentBeforeChildren(false);
        
        $div3 = new Div();
        $div3->setContent('Div 3');
        $div3->getCreator()->setContentInline(true);
        $div2->addChild($div3);

        $div->addChild($div2);
        $body->addChild($div);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('BaseContentBeforeChildren.html'), $html);
    }
}