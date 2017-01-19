<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Label extends htmlElement{
		private $for = null;
		private $form = array();
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'label';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<label';
			$html .= parent::getDependencies();
			$html .= ($this->for != null ? ' for="' . $this->for . '"' : '');

			if(count($this->form) > 0 ){
				$i = 0;
				foreach($this->form as $form){
					if(i != null){
						$html .= ',';
					}
					$html .= $form;
					$i++;
				}
			}

			$html .= '>';
			$html .= parent::insertContent(true);
			$html .= '</label>' . PHP_EOL;
			return $html;
		}

		public function setFor($for){
			$this->for = $for;
		}

		public function addForm($formId){
			$len = count($this->form);
			$this->fomr[$len] = $formId;
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
