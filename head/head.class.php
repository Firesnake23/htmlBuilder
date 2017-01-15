<?php
    require_once $rootFolder.'htmlBuilder/head/meta.class.php';
    require_once $rootFolder.'htmlBuilder/head/customMeta.class.php';
    require_once $rootFolder.'htmlBuilder/head/script.class.php';
    require_once $rootFolder.'htmlBuilder/head/link.class.php';
    require_once $rootFolder.'htmlBuilder/head/base.class.php';

    class Head{
        private $title = null;
        private $base = null;
        private $meta = array();
        private $scripts = array();
        private $links = array();

        public function create(){
            $html = "\t<head>" . PHP_EOL;
                $html .= "\t\t<title>" . $this->getTitle() . '</title>' . PHP_EOL;

                if($this->base != null){
                    $html .= "\t\t" . '<base href="' . $this->base->getHref() . '" target="_' . $this->base->getTarget() .'">' . PHP_EOL;
                }

                foreach($this->meta as $m){
                    $html .= $m->create(2);
                }

                foreach($this->scripts as $script){
                    $html .= $script->create(2);
                }

                foreach($this->links as $link){
                    $html .= $link->create(2);
                }
            $html .= "\t</head>" . PHP_EOL;
            return $html;
        }

        public function setBase(Base $base){
            $this->base = $base;
        }

        public function getTitle(){
            return $this->title;
        }

        public function createMeta($name,$content){
            $createdMeta = new Meta($name,$content);
            return $createdMeta;
        }

        public function addMeta(Meta $meta){
            $len = count($this->meta);
            $this->meta[$len] = $meta;
        }

        public function addCustomMeta($name,$value){
            $len = count($this->meta);
            $this->addMeta(new CustomMeta($name,$value));
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function addScript(JavaScript $js){
            $len = count($this->scripts);
            $this->scripts[$len] = $js;
        }

        public function addLink(Link $link){
            $len = count($this->links);
            $this->links[$len] = $link;
        }
    }
?>
