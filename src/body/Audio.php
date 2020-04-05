<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\HtmlElement;

class Audio extends HtmlElement
{
    public function __construct(string $src)
    {
        parent::__construct();
        $this->addAttribute('src', $src);
    }

    public function getName(): string
    {
        return 'audio';
    }

    public function autoplay()
    {
        $this->addAttribute('autoplay');
    }

    public function controls() {
        $this->addAttribute('controls');
    }

    public function loop(){
        $this->addAttribute('loop');
    }

    public function mute(){
        $this->addAttribute('muted');
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
}