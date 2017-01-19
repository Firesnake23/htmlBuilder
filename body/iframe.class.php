<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Iframe extends htmlElement{
		private $src = null;
		private $isSandbox = false;
		private $ALLOW_FORMS = false;
		private $ALLOW_POINTER_LOCK = false;
		private $ALLOW_POPUPS = false;
		private $ALLOW_SAME_ORIGIN = false;
		private $ALLOW_SCRIPTS = false;
		private $ALLOW_TOP_NAVIGATION = false;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'iframe';
    		$this->parent = $parent;
		}

		public function create(){
			if($this->src == null){
				throw new Exception('Iframe: source must be set');
			}

			$html = parent::createTabs();
			$html .= '<iframe';
			$html .= parent::getDependencies();
			$html .= ' src="' . $this->src . '"';
			if($this->isSandbox){
				 $html .= ' sandbox';
				 $number = $this->getAllowed();

				 if($number > 0){
					 $html .= '="';
					 if($this->ALLOW_FORMS){
						 $html .= 'allow-forms';
						 $number--;
						 $html .= ($number != 0 ? ' ' : '');
					 }

					 if($this->ALLOW_POINTER_LOCK){
						 $html .= 'allow-pointer-lock';
						 $number--;
						 $html .= ($number != 0 ? ' ' : '');
					 }

					 if($this->ALLOW_POPUPS){
						$html .= 'allow-popups';
						$number--;
						$html .= ($number != 0 ? ' ' : '');
					}

					if($this->ALLOW_SAME_ORIGIN){
						$html .= 'allow-same-origin';
						$number--;
						$html .= ($number != 0 ? ' ' : '');
					}

					if($this->ALLOW_SCRIPTS){
						$html .= 'allow-scripts';
						$number--;
						$html .= ($number != 0 ? ' ' : '');
					}

					if($this->ALLOW_TOP_NAVIGATION){
						$html .= 'allow-top-navigation';
						$number--;
						$html .= ($number != 0 ? ' ' : '');
					}

					 $html .= '"';
				  }
			}
			$html .= '></iframe>' . PHP_EOL;
			return $html;
		}

		private function getAllowed(){
			$i = 0;
			($this->ALLOW_FORMS ? $i++ : '');
			($this->ALLOW_POINTER_LOCK ? $i++ : '');
			($this->ALLOW_POPUPS ? $i++ : '');
			($this->ALLOW_SAME_ORIGIN ? $i++ : '');
			($this->ALLOW_SCRIPTS ? $i++ : '');
			($this->ALLOW_TOP_NAVIGATION ? $i++ : '');
			return $i;
		}

		public function sandbox(){
			$this->isSandbox = true;
		}

		public function allowForms(){
			$this->isSandbox = true;
			$this->ALLOW_FORMS = true;
		}

		public function allowPointerLock(){
			$this->isSandbox = true;
			$this->ALLOW_POINTER_LOCK = true;
		}

		public function allowPopups(){
			$this->isSandbox = true;
			$this->ALLOW_POPUPS = true;
		}

		public function allowSameOrigin(){
			$this->isSandbox = true;
			$this->ALLOW_SAME_ORIGIN = true;
		}

		public function allowScripts(){
			$this->isSandbox = true;
			$this->ALLOW_SCRIPTS = true;
		}

		public function allowTopNavigation(){
			$this->ALLOW_TOP_NAVIGATION = true;
		}

		public function allowAll(){
			$this->ALLOW_FORMS = true;
			$this->ALLOW_POINTER_LOCK = true;
			$this->ALLOW_POPUPS = true;
			$this->ALLOW_SAME_ORIGIN = true;
			$this->ALLOW_SCRIPTS = true;
			$this->ALLOW_TOP_NAVIGATION = true;
		}

		public function setSource($src){
			$this->src = $src;
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
