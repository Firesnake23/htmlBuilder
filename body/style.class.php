<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class StyleTag extends htmlElement{
		private $showType = true;
		private $media = null;
		private $scoped = false;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'style';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<' . $this->name;

			$html .= parent::getDependencies();

			$html .= ($this->showType != null ? ' type="text/css"' : '');
			$html .= ($this->media != null ? ' media="' . $this->media . '"' : '');
			$html .= ($this->scoped ? ' scoped' : '');

			$html .=  '>' . PHP_EOL;
			$html .= parent::insertContent(false);
			$html .= parent::createTabs() . '</' . $this->name . '>' . PHP_EOL;
			return $html;
		}

		public function hideType(){
			$this->showType = false;
		}

		public function setMedia($media){
			$this->media = $media;
		}

		public function scoped(){
			$this->scoped = true;
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
