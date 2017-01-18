<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Option extends htmlElement{
		private $disable = false;
		private $selected = false;
		private $value = null;
		private $label = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'option';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<option';
			$html .= parent::getDependencies();

			if($this->value != null){
				$html .= ' value="' . $this->value . '"';
			}

			if($this->label != null){
				$html .= ' label="' . $this->label . '"';
			}

			if($this->selected){
				$html .= ' selected';
			}

			if($this->disable){
				$html .= ' disabled';
			}


			$html .= '>';

			if(parent::getParent()->getName() != 'datalist'){
				$html .= $this->content;
				$html .= '</option>';
			}

			$html .= PHP_EOL;
			return $html;
		}

		public function setLabel($label){
			$this->label = $label;
		}

		public function select(){
			$this->selected = true;
		}

		public function disable(){
			$this->disable = true;
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
