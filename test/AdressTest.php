<?php
namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\A;
use firesnake\htmlBuilder\body\Address;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    function testAddress() {
        $page = new Page();
        $body = $page->getBody();

        $address = new Address();
        $a = new A('mailto:webmaster@example.com');
        $a->setCreator(new InlineCreator());
        $a->setContent('Jon Doe');

        $address->setContent('Written by ' . $a->create() . '.Visit us at: Example.com, Box 564, Disneyland USA');
        $div = new Div();
        $div->addChild($address);
        $body->addChild($div);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('AdressTest.html'), $html);
    }
}