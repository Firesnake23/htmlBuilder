<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Track extends htmlElement{
		private $default = false;
		private $kind = null;
		private $label = null;
		private $src = null;
		private $srclang = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'track';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<' . $this->name;

			$html .= parent::getDependencies();

			$html .= ($this->default ? ' default' : '');
			$html .= ($this->kind != null ? ' kind="' . $this->kind . '"' : '');
			$html .= ($this->label != null ? ' label="' . $this->label . '"' : '');
			$html .= ($this->src != null ? ' src="' . $this->src . '"' : '');
			$html .= ($this->srclang != null ? ' srclang="' . $this->srclang . '"' : '');

			$html .=  '>' . PHP_EOL;
			return $html;
		}

		public function default(){
			$this->default = true;
		}

		public function setKind($kind){
			$this->kind = $kind;
		}

		public function setLabel($label){
			$this->label = $label;
		}

		public function setSrc($src){
			$this->src = $src;
		}

		public function setSrclang($srclang){
			$this->srclang = $srclang;
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
