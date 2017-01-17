<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Bdo extends htmlElement{
		private $dir = 'ltr';
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'bdo';
    		$this->parent = $parent;
		}

		public function create(){
            $html = $this->createTabs() . '<' . $this->name;
            $html .= $this->getDependencies();
			$html .= ' dir="' . $this->dir . '"';
            $html .= '>' . PHP_EOL;
            $html .= $this->insertContent(false);
            $html .= $this->addChildren();
            $html .= $this->createTabs() . '</' . $this->name . '>' . PHP_EOL;
            return $html;
		}

		public function rtl(){
			$this->dir = 'rtl';
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
