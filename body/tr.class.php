<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Tr extends htmlElement{
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'tr';
    		$this->parent = $parent;
		}

		public function createData($content){
			$data = new Td($this);
			$data->setContent($content);
			$data->add();
			return $data;
		}

		public function createTitle($titleText){
			$title = new Th($this);
			$title->setContent($titleText);
			$title->add();
			return $title;
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
