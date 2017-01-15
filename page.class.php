<?php
    require_once 'config.php';
    require_once $rootFolder.'htmlBuilder/head/head.class.php';
    require_once $rootFolder.'htmlBuilder/body/body.class.php';
    require_once $rootFolder.'htmlBuilder/head/script.class.php';
    require_once $rootFolder.'htmlBuilder/head/link.class.php';
    require_once $rootFolder.'htmlBuilder/style.class.php';
    require_once $rootFolder.'htmlBuilder/js_event.class.php';
    require_once $rootFolder.'htmlBuilder/custom_attribute.class.php';

    Class Page extends htmlElement{
        private $head = null;
        private $body = null;
        private $lang = null;

        public function __construct(){
            $this->head = new Head();
            $this->body = new Body($this);
            $this->parent = null;
        }

        public function create(){
            $html = '<!DOCTYPE html>' . PHP_EOL;
            $html .= '<html';
            if($this->lang != null){
                $html .= ' lang="' . $this->lang . '"';
            }
            $html .= '>'.PHP_EOL;
            $html .= $this->head->create();
            $html .= $this->body->create();
            $html .= '</html>';
            return $html;
        }

        public function setLanguage($lang){
            $this->lang = $lang;
        }

        public function getHead(){
            return $this->head;
        }

        public function getBody(){
            return $this->body;
        }

        public function setId($id){
            //no implementation;
        }

        public function setContent($content){
            //no implementation;
        }

        public function setName($name){
            //no implementation;
        }

        public function setClass($class){
            //no implementation;
        }

        public function addStyle(Style $style){
            //no implementation;
        }

        public function addJsEvent(JavaScriptEvent $jsEvent){
            // no implementation;
        }

        public function addAttribute(CustomAttribute $attribute){
            //no implementation
        }

        public function setTitle($title){
            $this->head->setTitle($title);
        }

        public function setAuthor($author){
            $this->head->addMeta($this->head->createMeta('author',$author));
        }

        public function setCharset($charset){
            $this->head->addCustomMeta('charset',$charset);
        }

        public function addScript($src){
            $this->head->addScript(new JavaScript($src));
        }

        public function addLink($rel,$href,$type){
            $this->head->addLink(new Link($rel,$href,$type));
        }

        public function addHtmlElement($name,$level,$parent){
            return $this->body->addElement($name,$level,$parent);
        }

        public function createElement($name,$parent){
            $element = new $name($parent);
            return $element;
        }

        public function createStyle($property,$value){
            return new Style($property,$value);
        }

        public function createJsEvent($event,$action){
            return new JavaScriptEvent($event,$action);
        }

        public function createAttribute($name,$value){
            return new CustomAttribute($name,$value);
        }
    }
?>
