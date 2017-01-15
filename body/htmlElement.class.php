<?php
    abstract class htmlElement{
        protected $level;
        protected $name;
        protected $parent;
        protected $id = null;
        protected $elementName = null;
        protected $content = null;
        protected $class = null;
        protected $children = array();
        protected $styles = array();
        protected $jsEvents = array();
        protected $customAttributes = array();

        public abstract function setId($id);
        public abstract function setName($elementName);
        public abstract function setClass($class);
        public abstract function setContent($content);

        public abstract function addStyle(Style $style);
        public abstract function addJsEvent(JavaScriptEvent $jsEvent);
        public abstract function addAttribute(CustomAttribute $attribute);

        protected final function createTabs(){
            $html = '';
            for($i = 0; $i < $this->level; $i++){
                $html .= "\t";
            }
            return $html;
        }

        public function create(){
            $html = '';
            $html .= $this->createTabs() . '<' . $this->name;
            $html .= $this->getDependencies();

            $html .= '>' . PHP_EOL;
            $html .= $this->insertContent(false);
            foreach($this->children as $child){
                $html .= $child->create();
            }
            $html .= $this->createTabs() . '</' . $this->name . '>' . PHP_EOL;
            return $html;
        }

        public function getDependencies(){
            $html = '';

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

            return $html;
        }

        public function insertContent($ignoreTabs){
            $html = '';
            if($this->content != null){
                $this->level += 1;
                if($this->content != null){
                    if(!$ignoreTabs){
                        $html .= $this->createTabs();
                    }
                    $html .= $this->content;
                    if(get_Class($this) != "Input" && get_Class($this) != 'A'){
                        $html .= PHP_EOL;
                    }
                }
                $this->level -= 1;
            }
            return $html;
        }

        public function getLevel(){
            return $this->level;
        }

        public function add(){
            $this->parent->addChild($this);
        }
    }
?>
