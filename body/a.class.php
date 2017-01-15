<?php
    require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
    class A extends htmlElement{
        private $download = false;
        private $href = null;
        private $rel = null;
        private $target = null;

        function __construct($parent){
            $this->level = $parent->getLevel() + 1;
            $this->name = 'a';
            $this->parent = $parent;
        }

        public function create(){
            $html = '';
            $html .= parent::createTabs();
            $html .= '<' . $this->name;
            $html .= parent::getDependencies();

            if($this->href != null){
                $html .= ' href="' . $this->href . '"';
            }else{
                throw new Exception('no Href set');
            }

            if($this->target != null){
                $html .= ' target="_'. $this->target . '"';
            }

            if($this->download){
                $html .= ' download';
            }

            $html .= '>';
            $html .= parent::insertContent(true);
            $html .= '</' . $this->name . '>';
            $html .= PHP_EOL;
            return $html;
        }

        public function setTarget($target){
            $this->target = $target;
        }

        public function setRel($rel){
            $this->rel = $rel;
        }

        public function setHref($href){
            $this->href = htmlspecialchars($href);
        }

        public function download(){
            $this->download = true;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function setName($name){
            $this->elementName = $name;
        }

        public function setClass($class){
            $this->class = $class;
        }

        public function addStyle(Style $style){
            $len = count($this->styles);
            $this->styles[$len] = $style;
        }

        public function addJsEvent(JavaScriptEvent $jsEvent){
            $len = count($this->jsEvents);
            $this->jsEvents[$len] = $jsEvent;
        }

        public function addChild(HtmlElement $child){
            $len = count($this->children);
            $this->children[$len] = $child;
        }

        public function addAttribute(CustomAttribute $attribute){
            $len = count($this->customAttributes);
            $this->customAttributes[$len] = $attribute;
        }

        public function hide(){
            $this->hidden = true;
        }
    }
?>
