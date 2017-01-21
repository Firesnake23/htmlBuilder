<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Object extends htmlElement{
		private $form = null;
		private $height = null;
		private $type = null;
		private $usemap = null;
		private $width = null;

		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'object';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<' . $this->name;

			$html .= parent::getDependencies();

			$html .= ($this->form != null ? ' form="' . $this->form . '"' : '');
			$html .= ($this->height != null ? ' height="' . $this->height . '"' : '');
			$html .= ($this->type != null ? ' type="' . $this->type . '"' : '');
			$html .= ($this->usemap != null ? ' usemap="' . $this->usemap . '"' : '');
			$html .= ($this->width != null ? ' width="' . $this->width . '"' : '');

			$html .=  '>';
			$html .= '</' . $this->name . '>' . PHP_EOL;
			return $html;
		}

		public function setForm($form){
			$this->form = $form;
		}

		public function setHeight($height){
			$this->height = $height;
		}

		public function setType($type){
			$this->type = $type;
		}

		public function setUsemap($usemap){
			$this->usemap = $usemap;
		}

		public function setWidth($width){
			$this->width = $width;
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
