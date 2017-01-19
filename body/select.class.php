<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Select extends htmlElement{
		private $autofocus = false;
		private $multiple = false;
		private $disabled = false;
		private $required = false;
		private $form = null;
		private $size = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'select';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<select';
			$html .= parent::getDependencies();
			$html .= ($this->form != null ? ' form="' . $this->form . '"'  : '');
			$html .= ($this->size != null ? ' size="' . $this->size . '"'  : '');
			$html .= ($this->autofocus ? ' autofocus'  : '');
			$html .= ($this->multiple ? ' multiple'  : '');
			$html .= ($this->disabled ? ' disabled'  : '');
			$html .= ($this->required ? ' required'  : '');
			$html .= '>' . PHP_EOL;
			$html .= parent::addChildren();
			$html .= parent::createTabs() . '</select>' . PHP_EOL;
			return $html;
		}

		public function addDisabledOptgroup(Optgroup $optgroup){
			$optgroup->disable();
			$this->addOptgroup($optgroup);
		}

		public function addOptgroup(Optgroup $optgroup){
			$optgroup->setParent($this);
			$optgroup->level = $this->level + 1;
			$optgroup->add();
		}

		public function createDisabledOptgroup($label){
			$optgroup = $this->createOptgroup($label);
			$optgroup->disable();
			return $optgroup;
		}

		public function createOptgroup($label){
			$optgroup = new Optgroup($this);
			$optgroup->setLabel($label);
			$optgroup->add();
			return $optgroup;
		}

		public function require(){
			$this->required = true;
		}

		public function disable(){
			$this->multiple = true;
		}

		public function multipleSelection(){
			$this->multiple = true;
		}

		public function autofocus(){
			$this->autofocus = true;
		}

		public function setSize($size){
			$this->size = $size;
		}

		public function setForm($form){
			$this->form = $form;
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
