<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\Form;
use firesnake\htmlBuilder\body\H1;
use firesnake\htmlBuilder\body\H2;
use firesnake\htmlBuilder\body\H3;
use firesnake\htmlBuilder\body\H4;
use firesnake\htmlBuilder\body\H5;
use firesnake\htmlBuilder\body\H6;
use firesnake\htmlBuilder\body\I;
use firesnake\htmlBuilder\body\Input;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class InputTest extends TestCase
{

    public function testInput()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $form = new Form();
        $form->setId('form');
        $div->addChild($form);

        $textInput = new Input('text');
        $textInput->setPattern('[A-Za-z]{10}');
        $textInput->setMinlength(3);
        $textInput->setMaxlength(10);
        $textInput->setAutocomplete(true);
        $textInput->autofocus();
        $textInput->setForm('form');
        $textInput->setList('someList');
        $textInput->multiple();
        $textInput->setPlaceholder('somePlaceholder');
        $textInput->required();
        $textInput->setSize(3);

        $numberInput = new Input('number');
        $numberInput->setMin(0);
        $numberInput->setMax(100);
        $numberInput->setAutocomplete(false);
        $numberInput->setStep(5);

        $inputCheck = new Input('checkbox');
        $inputCheck->checked();
        $inputCheck->setHeight('30');
        $inputCheck->setName('chkTest');
        $inputCheck->setWidth(30);

        $fileInput = new Input('file');
        $fileInput->setAccept('application/pdf');
        $fileInput->setDirname('/img');

        $imageInput = new Input('image');
        $imageInput->setSrc('http://localhost/img/sample.png');
        $imageInput->setAlt('send');
        $imageInput->disable();
        $imageInput->readonly();

        $buttonInput = new Input('button');
        $buttonInput->setValue('Send');
        $buttonInput->setFormmethod('post');
        $buttonInput->setFormenctype('text/plain');
        $buttonInput->formnovalidate();
        $buttonInput->setFormtarget('_blank');

        $form->addChild($textInput);
        $form->addChild($numberInput);
        $form->addChild($inputCheck);
        $form->addChild($fileInput);
        $form->addChild($imageInput);
        $form->addChild($buttonInput);

        $this->assertEquals(TestUtils::fileContent('InputTest.html'), $page->create());
    }
}