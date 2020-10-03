<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Video extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getName(): string
    {
        return 'video';
    }

    public function autoplay()
    {
        $this->addAttribute('autoplay');
    }

    public function controls() {
        $this->addAttribute('controls');
    }

    public function setHeight(int $height)
    {
        $this->addAttribute('height', $height);
    }

    public function loop(){
        $this->addAttribute('loop');
    }

    public function mute(){
        $this->addAttribute('muted');
    }

    public function setPoster(string $url)
    {
        $this->addAttribute('poster', $url);
    }

    /**
     * Specifies which data should be preloaded
     * <ul>
     *  <li> auto </li>
     *  <li> metadata </li>
     *  <li> none </li>
     * </ul>
     *
     * @param string $preload
     *
     */
    public function setPreload(string $preload){
        $this->addAttribute('preload', $preload);
    }

    public function setSrc(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function setWidth(int $pixels)
    {
        $this->addAttribute('width', $pixels);
    }
}