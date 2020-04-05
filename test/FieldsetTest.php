<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Em;
use firesnake\htmlBuilder\body\Fieldset;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class FieldsetTest extends TestCase
{

    public function testFieldset()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);


        $fieldset = new Fieldset();
        $fieldset->disable();
        $fieldset->setForm('formId');
        $fieldset->setName('fieldsetName');
        $div->addChild($fieldset);

        $this->assertEquals(TestUtils::fileContent('FieldsetTest.html'), $page->create());
    }
}