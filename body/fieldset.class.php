<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Fieldset extends htmlElement{
		private $disabled = false;
		private $form = array();
		private $legend = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'fieldset';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<fieldset';
			$html .= parent::getDependencies();

			if($this->disabled){
				$html .= ' disabled';
			}

			if(count($this->form) > 0){
				$html .=  ' form="';
				$i = 0;
				foreach($this->form as $form){
					if($i != 0){
						$html .= ',';
					}

					$html .= $form;

					$i++;
				}
			}
			$html .= '"';
			$html .= '>' . PHP_EOL;

			if($this->legend != null){
				$html .= $this->legend->create();
			}

			$html .= parent::addChildren();
			$html .= parent::createTabs() . '</fieldset>' . PHP_EOL;
			return $html;
		}

		public function createLegend($content){
			$this->legend = new Legend($this);
			$this->legend->setContent($content);
			return $this->legend;
		}

		public function addForm($formName){
			$len = count($this->form);
			$this->form[$len] = $formName;
		}

		public function disable(){
			$this->disabled = true;
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
