<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Dialog extends htmlElement{
		private $open = false;
		private $multiline = true;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'dialog';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<dialog';
			$html .= parent::getDependencies();

			if($this->open){
				$html .= ' open';
			}

			$html .= '>';

			if($this->multiline){
				$html .= PHP_EOL;
				$html .= parent::insertContent(false);
				$html .= parent::createTabs();
			}else{
				$html .= $this->content;
			}



			$html .= '</dialog>' . PHP_EOL;
			return $html;
		}


		public function singleline(){
			$this->multiline = false;
		}

		public function open(){
			$this->open = true;
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
