<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Keygen extends htmlElement{
		private $autofocus = false;
		private $challenge = false;
		private $disabled = false;
		private $form = null;
		private $keytype = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'keygen';
    		$this->parent = $parent;
		}


		public function create(){
			$html = parent::createTabs();
			$html .= '<' . $this->name;
			$html .= parent::getDependencies();
			$html .= ($this->autofocus ? ' autofocus' : '');
			$html .= ($this->challenge ? ' challenge' : '');
			$html .= ($this->disabled ? ' disabled': '');
			$html .= ($this->form != null ? ' form="' . $this->form . '"' : '');
			$html .= ($this->keytype != null ? ' keytype="' . $this->keytype . '"' : '');
			$html .= '>' . PHP_EOL;
			return $html;
		}

		public function autofocus(){
			$this->autofocus = true;
		}

		public function challenge(){
			$this->challenge = true;
		}

		public function disable(){
			$this->disabled = true;
		}

		public function setForm($form){
			$this->form = $form;
		}

		public function setKeytype($keytype){
			$this->keytype = $keytype;
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
