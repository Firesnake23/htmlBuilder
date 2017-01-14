<?php
    require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
    require_once $rootFolder.'htmlBuilder/body/div.class.php';
    require_once $rootFolder.'htmlBuilder/body/span.class.php';
    class Body extends htmlElement{
        public $page = null;

        public function __construct($page){
            $this->page = $page;
            $this->level = 1;
        }

        public function create(){
            $html = "\t<body" ;

            if($this->id != null){
                $html .= ' id="' . $this->id . '"';
            }

            if($this->elementName != null){
                $html .= ' name="' . $this->id . '"';
            }

            if($this->class != null){
                $html .= ' class="'. $this->class .'"';
            }

            if(count($this->styles) != 0){
                $html .= ' style="';
                foreach($this->styles as $style){
                    $html .= $style->getProperty() . ': ' . $style->getValue() . ';';
                }
                $html .= '"';
            }

            if(count($this->jsEvents) != 0){
                foreach($this->jsEvents as $jsEvent){
                    $html .=  ' ' . $jsEvent->getEvent();
                    $html .= '="' . $jsEvent->getAction() . ';';
                }
                $html .= '"';
            }

            if(count($this->customAttributes) != 0){
                foreach($this->customAttributes as $CustomAttribute){
                    $html .=  ' ' . $CustomAttribute->getName();
                    $html .= '="' . $CustomAttribute->getValue();
                }
                $html .= '"';
            }

            $html .= '>' . PHP_EOL;
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
    }
?>
