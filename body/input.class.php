<?php
    require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
    class Input extends htmlElement{
        private $type;
        private $contentBefore = false;
        private $value = null;
        private $placeholder = null;
        function __construct($parent){
            $this->level = $parent->getLevel() + 1;
            $this->name = 'input';
            $this->parent = $parent;
        }

        public function create(){
            if($this->type == null){
                throw new Exception('Type is not defined');
            }
            $html = '';
            $html .= parent::createTabs();
            $html .= '<' . $this->name;
            $html .= ' type="' . $this->type . '"';

            if($this->value != null){
                $html .= ' value="' . $this->value . '"';
            }

            if($this->placeholder != null){
                $html .= ' placeholder="' . $this->placeholder . '"';
            }

            $html .= parent::getDependencies();
            if($this->contentBefore){
                $html .= parent::insertContent(true);
            }
            $html .= '>';
            if(!$this->contentBefore){
                $html .= parent::insertContent(true);
            }
            $html .= PHP_EOL;
            return $html;
        }

        public function setPlaceholder($placeholder){
            $this->placeholder = htmlspecialchars($placeholder);
        }

        public function setValue($value){
            $this->value = htmlspecialchars($value);
        }

        public function contentBefore(){
            $this->contentBefore = true;
        }

        public function setType($type){
            $this->type = $type;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setContent($content){
            $this->content = htmlspecialchars($content);
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
    }
?>
