# htmlBuilder
This is a php based html generator

# How to use
Import The page class
```php
use firesnake\htmlBuilder\Page;

$page = new Page();
$body = $page->getBody(); //Get Access to the body element
$head = $page->getHead(); //Get Access to the head element
echo $page->create();
```
This wil lcreate you the basic html structure.

# Create your own components
```php
?php

namespace some\namespace;

class DangerAlert extends Div {
    public function __construct(string $content)
    {
        parent::_construct();
        $this->setClassName('alert alert-dismissible alert-danger');
        $this->setContent($content);
    }
}
```
This will create you a Bootstrap danger alert. (You have to load the bootstrap components yourself).

# Use the created component

```php
use firesnake\htmlBuilder\Page;
use some\namespace\DangerAlert;

$page = new Page();
$body = $page->getBody(); //Get Access to the body element

$dangerAlert = new DangerAlert('Hello Danger!');
$body->addChild($dangerAlert); //You can add a childcomponent like this.

echo $page->create();
```

# Beware the creators
Some HTML Elements are commonly used on at least 3 lines. 
```HTML
</div>
    some content
</div>
```
Others are used commonly on one line
```HTML
<a href="#">Some link</a>
```

The HtmlBuilder is able to distinct those. 
In the src/creators Directory of this project, you will find tose.
Every HTML Element has a default creator. If not specified in the subclass, it is the
firesnake\htmlBuilder\creators\DefaultCreator
This creator creates content like the div.

Anyway the A tag has the OneLineCreator of the same package. The HTMLElement  can take on Children,
but the OneLineCreator is one of those creators, who will ignore the children of the Element.

To find out what the creator of a HtmlElement is, you have to look in the constructor.
You can owerwrite the defaultCreator with 
```php
<?php
use firesnake\htmlBuilder\body\A;

$a = new A('href', 'linktext');
$a->setDefaultCreator(new InlineCreator());
```
