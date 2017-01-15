<?php
    require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';

    //All elements
    require_once $rootFolder.'htmlBuilder/body/a.class.php';
    require_once $rootFolder.'htmlBuilder/body/abbr.class.php';
    require_once $rootFolder.'htmlBuilder/body/address.class.php';
    require_once $rootFolder.'htmlBuilder/body/area.class.php';
    require_once $rootFolder.'htmlBuilder/body/div.class.php';
    require_once $rootFolder.'htmlBuilder/body/input.class.php';
    require_once $rootFolder.'htmlBuilder/body/span.class.php';

    class Body extends htmlElement{
        public $page = null;

        public function __construct($page){
            $this->page = $page;
            $this->level = 1;
        }

        public function create(){
            $html = "\t<body" ;

            $html .= parent::getDependencies();

            $html .= '>' . PHP_EOL;
            $html .= parent:: insertContent(false);
            foreach($this->children as $element){
                $html .= $element->create();
            }
            $html .= "\t</body>" . PHP_EOL;
            return $html;
            $this->parent = 'html';
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setName($name){
            $this->elementName = $name;
        }

        public function setClass($class){
            $this->class = $class;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function addStyle(Style $style){
            $len = count($this->styles);
            $this->styles[$len] = $style;
        }

        public function addJsEvent(JavaScriptEvent $jsEvent){
            $len = count($this->jsEvents);
            $this->jsEvents[$len] = $jsEvent;
        }

        public function addElement($name,$level,$parent){
            $element = $this->page->createElement($name,$level,$parent);
            $len = count($this->elements);
            $this->elements[$len] = $element;
            return $element;
        }

        public function addChild(HtmlElement $child){
            $len = count($this->children);
            $this->children[$len] = $child;
        }

        public function addAttribute(CustomAttribute $attribute){
            $len = count($this->CustomAttribute);
            $this->CustomAttribute[$len] = $attribute;
        }

        public function hide(){
            $this->hidden = true;
        }
    }
?>
