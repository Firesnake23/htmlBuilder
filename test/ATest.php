<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\A;
use firesnake\htmlBuilder\body\Body;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestResult;
use SebastianBergmann\CodeCoverage\UtilTest;

class ATest extends TestCase
{
    public function testSimple()
    {
        $page = new Page();
        $a = new A('localhost');
        $a->setContent('Go Home');
        $a->setHrefLang('en');
        $page->getBody()->addChild($a);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('ABase.html'), $html);
    }

    public function testDownload()
    {
        $page = new Page();
        $a = new A('localhost');
        $a->setContent('Download');
        $a->download('sample.pdf');
        $page->getBody()->addChild($a);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('ADownload.html'), $html);
    }

    public function testMedia()
    {
        $page = new Page();
        $a = new A('localhost');
        $a->setContent('Go Home');
        $a->setMedia('width');
        $page->getBody()->addChild($a);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('AMedia.html'), $html);
    }

    public function testPing()
    {
        $page = new Page();
        $a = new A('localhost');
        $a->setContent('Go Home');
        $a->setPing('example.com');
        $page->getBody()->addChild($a);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('APing.html'), $html);
    }

    public function testReferrerpolicy()
    {
        $page = new Page();
        $body = $page->getBody();
        $noReferrer = $this->createA($body);
        $noReferrer->setReferrerpolicy(A::REFERRERPOLICY_NO_REFERRER);
        $noReferrerWhenDowngrade = $this->createA($body);
        $noReferrerWhenDowngrade->setReferrerpolicy(A::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE);
        $origin = $this->createA($body);
        $origin->setReferrerpolicy(A::REFERRERPOLICY_ORIGIN);
        $originWhenCrossOrigin = $this->createA($body);
        $originWhenCrossOrigin->setReferrerpolicy(A::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN);
        $sameOrigin = $this->createA($body);
        $sameOrigin->setReferrerpolicy(A::REFERRERPOLICY_SAME_ORIGIN);
        $strictOrigin = $this->createA($body);
        $strictOrigin->setReferrerpolicy(A::REFERRERPOLICY_STRICT_ORIGIN);
        $strictOriginWhenCrossOrigin = $this->createA($body);
        $strictOriginWhenCrossOrigin->setReferrerpolicy(A::REFERRERPOLICY_STRICT_ORIGIN_WHEN_CROSS_ORIGIN);
        $unsafeUrl = $this->createA($body);
        $unsafeUrl->setReferrerpolicy(A::REFERRERPOLICY_UNSAFE_URL);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('AReferrerpolicy.html'), $html);
    }

    public function testRel()
    {
        $page = new Page();
        $body = $page->getBody();
        $alternate = $this->createA($body);
        $alternate->setRel(A::REl_ALTERNATE);
        $author = $this->createA($body);
        $author->setRel(A::REL_AUTHOR);
        $bookmark = $this->createA($body);
        $bookmark->setRel(A::REL_BOOKMARK);
        $canonical = $this->createA($body);
        $canonical->setRel(A::REL_CANONICAL);
        $exernal = $this->createA($body);
        $exernal->setRel(A::REl_EXTERNAL);
        $help = $this->createA($body);
        $help->setRel(A::REl_HELP);
        $icon = $this->createA($body);
        $icon->setRel(A::REL_ICON);
        $license = $this->createA($body);
        $license->setRel(A::REl_LICENSE);
        $manifest = $this->createA($body);
        $manifest->setRel(A::REL_MANIFEST);
        $modulepreload = $this->createA($body);
        $modulepreload->setRel(A::REL_MODULEPRELOAD);
        $next = $this->createA($body);
        $next->setRel(A::REl_NEXT);
        $nofollow = $this->createA($body);
        $nofollow->setRel(A::REl_NOFOLLOW);
        $noopener = $this->createA($body);
        $noopener->setRel(A::REl_NOOPENER);
        $noreferrer = $this->createA($body);
        $noreferrer->setRel(A::REl_NOREFERRER);
        $pingback = $this->createA($body);
        $pingback->setRel(A::REL_PINGBACK);
        $prefetch = $this->createA($body);
        $prefetch->setRel(A::REL_PREFETCH);
        $preload = $this->createA($body);
        $preload->setRel(A::REL_PRELOAD);
        $prev = $this->createA($body);
        $prev->setRel(A::REl_PREV);
        $search = $this->createA($body);
        $search->setRel(A::REl_SEARCH);
        $shortlink = $this->createA($body);
        $shortlink->setRel(A::REL_SHORTLINK);
        $stylesheet = $this->createA($body);
        $stylesheet->setRel(A::REL_STYLESHEET);
        $tag = $this->createA($body);
        $tag->setRel(A::REl_TAG);
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('ARel.html'), $html);
    }

    public function testTarget()
    {
        $page = new Page();
        $body = $page->getBody();
        $blank = $this->createA($body);
        $blank->setTarget(A::TARGET_BLANK);
        $parent = $this->createA($body);
        $parent->setTarget(A::TARGET_PARENT);
        $self = $this->createA($body);
        $self->setTarget(A::TARGET_SELF);
        $top = $this->createA($body);
        $top->setTarget(A::TARGET_TOP);
        $someFrame = $this->createA($body);
        $someFrame->setTarget('someFrame');
        $html = $page->create();
        $this->assertEquals(TestUtils::fileContent('ATestTarget.html'), $html);
    }

    private function createA(Body $body): A
    {
        $a = new A('http://localhost');
        $a->setContent('Go Home');
        $body->addChild($a);
        return $a;
    }
}
