<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Article;
use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\Page;

class ArticleTest extends \PHPUnit\Framework\TestCase {

    public function testArticle() {
        $page = new Page();
        $article = new Article();
        $article->setContent('Article Content');

        $div = new Div();
        $div->addChild($article);

        $page->getBody()->addChild($div);
        $this->assertEquals(TestUtils::fileContent('ArticleTest.html'), $page->create());
    }
}