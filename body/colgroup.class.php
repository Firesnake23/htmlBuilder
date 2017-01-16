<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Colgroup extends htmlElement{
		private $span = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'colgroup';
    		$this->parent = $parent;
		}


		public function create(){
			$html = parent::createTabs();
			$html .= '<colgroup';
			$html .= parent::getDependencies();

			if($this->span != null){
				$html .= ' span="' . $this->span . '"';
			}

			$html .= '>' . PHP_EOL;
			$html .= parent::addChildren();
			$html .= parent::createTabs() . '</colgroup>' . PHP_EOL;
			return $html;
		}

		public function setSpan($span){
			$this->span = $span;
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

		public function createCol($span = null){
			$col = new Col($this);

			if($span != null){
				$col->setSpan($span);
			}

			$this->addChild($col);
			return $col;
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
