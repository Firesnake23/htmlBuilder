<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Textarea extends htmlElement{
		private $autofocus = false;
		private $disabled = false;
		private $required = false;
		private $cols = null;
		private $dirname = null;
		private $form = null;
		private $maxlength = null;
		private $placeholder = null;
		private $rows = null;
		private $wrap = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'textarea';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<' . $this->name;

			$html .= parent::getDependencies();

			$html .= ($this->autofocus ? ' autofocus' : '');
			$html .= ($this->disabled ? ' disabled' : '');
			$html .= ($this->required ? ' required' : '');
			$html .= ($this->cols != null ? ' cols="' . $this->cols . '"' : '');
			$html .= ($this->dirname != null ? ' dirname="' . $this->dirname . '"' : '');
			$html .= ($this->form != null ? ' form="' . $this->form . '"' : '');
			$html .= ($this->maxlength != null ? ' maxlength="' . $this->maxlength . '"' : '');
			$html .= ($this->placeholder != null ? ' placeholder="' . $this->placeholder . '"' : '');
			$html .= ($this->rows != null ? ' rows="' . $this->rows . '"' : '');
			$html .= ($this->wrap != null ? ' wrap="' . $this->wrap . '"' : '');

			$html .=  '>' . PHP_EOL;
			$html .= parent::insertContent(false);
			$html .= parent::createTabs() . '</' . $this->name . '>' . PHP_EOL;
			return $html;
		}

		public function autofocus(){
			$this->autofocus = true;
		}

		public function disable(){
			$this->disabled = true;
		}

		public function require(){
			$this->required = true;
		}

		public function setCols($cols){
			$this->cols = $cols;
		}

		public function setDirname($dirname){
			$this->dirname = $dirname;
		}

		public function setForm($form){
			$this->form = $form;
		}

		public function setMaxLenght($len){
			$this->maxlength = $len;
		}

		public function setPlaceholder($placeholder){
			$this->placeholder = $placeholder;
		}

		public function setRows($rows){
			$this->rows = $rows;
		}

		public function hardWrap(){
			$this->wrap = 'hard';
		}

		public function softWrap(){
			$this->wrap = 'soft';
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
