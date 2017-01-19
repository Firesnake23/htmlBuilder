<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Form extends htmlElement{
		private $accept_charset = null;
		private $action = null;
		private $autocomplete = false;
		private $enctype = null;
		private $method = null;
		private $novalidate = true; //alert this is inverted
		private $target = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'form';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html.= '<form';
			$html .= parent::getDependencies();

			$html .= ($this->accept_charset != null ? ' accept-charset="' . $this->accept_charset . "'" : '');
			$html .= ($this->action != null ? ' action="' . $this->action . '"' : '');
			$html .= ($this->enctype != null ? ' enctype="' . $this->enctype . '"' : '');
			$html .= ($this->method != null ? ' method="' . $this->method . '"' : '');
			$html .= ($this->target != null ? ' target="' . $this->target . '"' : '');
			$html .= ($this->autocomplete ? ' autocomplete' : '');
			$html .= (!$this->novalidate != null ? ' novalidate' : '');

			$html .= '>' . PHP_EOL;
			$html .= parent::addChildren();
			$html .= parent::createTabs() . '</form>' . PHP_EOL;
			return $html;
		}

		public function createLabel($content,$for = null){
			$label = new Label($this);

			if($for != null){
				$label->setFor($for);
			}

			$label->setContent($content);
			$label->add();
			return $label;
		}

		public function addSelect(Select $select){
			parent::setParent($this);
			$select->add();
		}

		public function createSelect(){
			$select = new Select($this);
			$select->add();
			return $select;
		}

		public function createButton(){
			$button = new Button($this);
			$button->add();
			return $button;
		}

		public function createTextarea(){
			$textArea = new TextArea($this);
			$textArea->add();
			return $textarea;
		}

		public function createInput($type){
			$input = new Input($this);
			$input->setType($type);
			$input->add();
			return $input;
		}

		public function setTarget($target){
			$this->target = $target;
		}

		public function novalidate(){
			$this->novalidate = false;
		}

		public function get(){
			$this->method = 'get';
		}

		public function post(){
			$this->method = 'post';
		}

		public function setEnctype($enctype){
			$this->enctype = $enctype;
		}

		public function autocomplete(){
			$this->autocomplete = true;
		}

		public function setAction($action){
			$this->action = $action;
		}

		public function setAcceptCharset($charset){
			$this->accept_charset = $charset;
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
