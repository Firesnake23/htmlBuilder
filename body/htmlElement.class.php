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
        protected $hidden = false;

        public abstract function setId($id);
        public abstract function setName($elementName);
        public abstract function setClass($class);
        public abstract function setContent($content);

        public abstract function addStyle(Style $style);
        public abstract function addJsEvent(JavaScriptEvent $jsEvent);
        public abstract function addAttribute(CustomAttribute $attribute);

        public abstract function hide();

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
            $html .= $this->addChildren();
            $html .= $this->createTabs() . '</' . $this->name . '>' . PHP_EOL;
            return $html;
        }

        public function addChildren(){
            $html = '';
            foreach($this->children as $child){
                $html .= $child->create();
            }
            return $html;
        }


        public function getDependencies(){
            $html = '';

            if($this->id != null){
                $html .= ' id="' . $this->id . '"';
            }

            if($this->elementName != null){
                $html .= ' name="' . $this->elementName . '"';
            }

            if($this->class != null){
                $html .= ' class="'. $this->class .'"';
            }

            if($this->hidden){
                $html .= ' hidden';
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

        public final function getParent(){
            return $this->parent;
        }

        public final function setParent($parent){
            $this->parent = $parent;
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
                    if(get_Class($this) != "Input" && get_Class($this) != 'A' && get_Class($this) != 'Button' && get_class($this) != 'Caption' && get_class($this) != 'Th' && get_Class($this) != 'Td'
                        && get_Class($this) != 'Legend' && get_class($this) != 'Label' && get_class($this) != 'Li' && get_class($this) != 'Output' && get_Class($this) != 'Time'
                        && get_Class($this) != "H1" && get_Class($this) != 'H2' && get_Class($this) != 'H3' && get_class($this) != 'H4' && get_class($this) != 'H5' && get_Class($this) != 'H6'){
                        $html .= PHP_EOL;
                    }
                }
                $this->level -= 1;
            }
            return $html;
        }

        public function getName(){
            return $this->name;
        }

        public function getLevel(){
            return $this->level;
        }

        public function add(){
            $this->parent->addChild($this);
        }
    }
?>
