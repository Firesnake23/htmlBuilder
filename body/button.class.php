<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Button extends htmlElement{
		private $autofocus = false;
		private $disable = false;
		private $novalidate = false;
		private $form = null;
		private $formaction = null;
		private $formenctype = null;
		private $method = null;
		private $target = null;
		private $type = null;
		private $value = null;


		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'button';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<button';
			$html .= parent::getDependencies();

			if($this->disable){
				$html .= ' disabled';
			}

			if($this->autofocus){
				$html .= ' autofocus';
			}

			if($this->novalidate){
				$html .= ' novalidate';
			}

			if($this->form != null){
				$html .= ' form="' . $this->form . '"';
			}

			if($this->formaction != null){
				$html .= ' formaction="' . $this->formaction . '"';
			}

			if($this->formenctype != null){
				$html .= ' formenctype="' . $this->formenctype . '"';
			}

			if($this->method != null){
				$html .= ' formmethod="' . $this->method . '"';
			}

			if($this->target != null){
				$html .= ' formtarget="' . $this->target . '"';
			}

			if($this->target != null){
				$html .= ' type="' . $this->type . '"';
			}

			if($this->value != null){
				$html .= ' value="' . $this->value . '"';
			}

			$html .= '>' . PHP_EOL;
			$html .= parent::insertContent(true);
			$html .= parent::addChildren();
			$html .= parent:: createTabs() . '</button>' . PHP_EOL;
			return $html;
		}

		public function novalidate(){
			$this->novalidate = true;
		}

		public function post(){
			$this->method = 'post';
		}

		public function get(){
			$this->method = 'get';
		}

		public function disable(){
			$this->disable = true;
		}

		public function autofocus(){
			$this->autofocus = true;
		}

		public function setValue($value){
			$this->value = $value;
		}

		public function setType($type){
			$this->type = $type;
		}

		public function setTarget($target){
			$this->target = '_' . $target;
		}

		public function setFormEnctype($enctype){
			$this->formenctype = $enctype;
		}

		public function setFormAction($url){
			$this->formaction = $url;
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
