<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\HtmlElement;
use PHPUnit\Util\Exception;

class A extends HtmlElement
{
    const REFERRERPOLICY_NO_REFERRER = 'no-referrer';
    const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade';
    const REFERRERPOLICY_ORIGIN = 'origin';
    const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin';
    const REFERRERPOLICY_SAME_ORIGIN = 'same-origin';
    const REFERRERPOLICY_STRICT_ORIGIN = 'strict-origin';
    const REFERRERPOLICY_STRICT_ORIGIN_WHEN_CROSS_ORIGIN = 'strict-origin-when-cross-origin';
    const REFERRERPOLICY_UNSAFE_URL = 'unsafe-url';

    const REl_ALTERNATE = 'alternate';
    const REL_AUTHOR = 'author';
    const REL_BOOKMARK = 'bookmark';
    const REL_CANONICAL = 'canonical';
    const REl_EXTERNAL = 'external';
    const REl_HELP = 'help';
    const REL_ICON = 'icon';
    const REl_LICENSE = 'license';
    const REL_MANIFEST = 'manifest';
    const REL_MODULEPRELOAD = 'modulepreload';
    const REl_NEXT = 'next';
    const REl_NOFOLLOW = 'nofollow';
    const REl_NOOPENER = 'noopener';
    const REl_NOREFERRER = 'noreferrer';
    const REL_PINGBACK = 'pingback';
    const REL_PREFETCH = 'prefetch';
    const REL_PRELOAD = 'preload';
    const REl_PREV = 'prev';
    const REl_SEARCH = 'search';
    const REL_SHORTLINK = 'shortlink';
    const REL_STYLESHEET = 'stylesheet';
    const REl_TAG = 'tag';

    const TARGET_BLANK = '_blank';
    const TARGET_PARENT = '_parent';
    const TARGET_SELF = '_self';
    const TARGET_TOP = '_top';

    public function __construct(string $href)
    {
        parent::__construct();
        $this->setCreator(new OneLineCreator());
        $this->addAttribute('href', $href);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'a';
    }

    public function download(string $filename)
    {
        $this->addAttribute('download', $filename);
    }

    public function setHrefLang(string $lang)
    {
        $this->addAttribute('hreflang', $lang);
    }

    public function setMedia(string $media)
    {
        $this->addAttribute('media', $media);
    }

    public function setPing(string $ping)
    {
        $this->addAttribute('ping', $ping);
    }

    public function setReferrerpolicy(string $policy)
    {
        $possibilities = [
            self::REFERRERPOLICY_NO_REFERRER,
            self::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE,
            self::REFERRERPOLICY_ORIGIN,
            self::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN,
            self::REFERRERPOLICY_SAME_ORIGIN,
            self::REFERRERPOLICY_STRICT_ORIGIN,
            self::REFERRERPOLICY_STRICT_ORIGIN_WHEN_CROSS_ORIGIN,
            self::REFERRERPOLICY_UNSAFE_URL
        ];
        if(false !== array_search($policy, $possibilities)) {
            $this->addAttribute('referrerpolicy', $policy);
        }
    }

    public function setRel(string $rel) {
        $possibilities = [
            self::REl_ALTERNATE,
            self::REL_AUTHOR,
            self::REL_BOOKMARK,
            self::REL_CANONICAL,
            self::REl_EXTERNAL,
            self::REl_HELP,
            self::REL_ICON,
            self::REl_LICENSE,
            self::REL_MANIFEST,
            self::REL_MODULEPRELOAD,
            self::REl_NEXT,
            self::REl_NOFOLLOW,
            self::REl_NOREFERRER,
            self::REl_NOOPENER,
            self::REL_PINGBACK,
            self::REL_PREFETCH,
            self::REL_PRELOAD,
            self::REl_PREV,
            self::REl_SEARCH,
            self::REL_SHORTLINK,
            self::REL_STYLESHEET,
            self::REl_TAG
        ];

        if(false !== array_search($rel, $possibilities)) {
            $this->addAttribute('rel', $rel);
        }
    }

    public function setTarget(string $target) {
        $this->addAttribute('target', $target);
    }
}