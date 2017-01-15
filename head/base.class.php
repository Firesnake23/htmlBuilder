<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Base extends htmlElement{
		private $href = null;
		private $target = null;

		public function __construct(){
    		$this->name = 'base';
		}

		public function getHref(){
			return $this->href;
		}

		public function getTarget(){
			return $this->target;
		}

		public function setHref($href){
			$this->href = $href;
		}

		public function setTarget($target){
			$this->target = $target;
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
