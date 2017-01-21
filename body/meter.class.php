<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Meter extends htmlElement{
		private $form = null;
		private $high = null;
		private $low = null;
		private $max = null;
		private $min = null;
		private $optimum = null;
		private $value = null;

		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'meter';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<' . $this->name;

			$html .= parent::getDependencies();

			$html .= ($this->form != null ? ' form="' . $this->form . '"' : '');
			$html .= ($this->high != null ? ' high="' . $this->high . '"' : '');
			$html .= ($this->low != null ? ' low="' . $this->low . '"' : '');
			$html .= ($this->max != null ? ' max="' . $this->max . '"' : '');
			$html .= ($this->min != null ? ' min="' . $this->min . '"' : '');
			$html .= ($this->optimum != null ? ' optimum="' . $this->optimum . '"' : '');
			$html .= ($this->value != null ? ' value="' . $this->value . '"' : '');

			$html .=  '>';
			$html .= '</' . $this->name . '>' . PHP_EOL;
			return $html;
		}

		public function setForm($val){
			$this->form = $val;
		}

		public function setHigh($val){
			$this->high = $val;
		}

		public function setLow($val){
			$this->low = $val;
		}

		public function setMax($val){
			$this->max = $val;
		}

		public function setMin($val){
			$this->min = $val;
		}

		public function setOptmimum($val){
			$this->optimum = $val;
		}

		public function setValue($value){
			$this->value = $value;
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
