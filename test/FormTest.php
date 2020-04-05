<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\body\Fieldset;
use firesnake\htmlBuilder\body\Figure;
use firesnake\htmlBuilder\body\Footer;
use firesnake\htmlBuilder\body\Form;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{

    public function testForm()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $form1 = new Form();
        $form1->setAcceptCharset('utf-8');
        $form1->setAction('http://localhost');
        $form1->setAutocomplete(false);
        $form1->setEnctype('text/plain');
        $form1->setMethod('get');
        $form1->setName('form1');
        $form1->novalidate();
        $form1->setTarget('_blank');
        $div->addChild($form1);

        $form2 = new Form();
        $form2->setAcceptCharset('utf-8');
        $form2->setAction('http://localhost');
        $form2->setAutocomplete(true);
        $form2->setEnctype('text/plain');
        $form2->setMethod('post');
        $form2->setName('form2');
        $form2->novalidate();
        $form2->setTarget('_blank');
        $div->addChild($form2);

        $this->assertEquals(TestUtils::fileContent('FormTest.html'), $page->create());
    }
}