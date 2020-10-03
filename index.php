<?php

require_once 'vendor/autoload.php';

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\head\Title;
use firesnake\htmlBuilder\HtmlElement;
use firesnake\htmlBuilder\Page;

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
echo $page->create();