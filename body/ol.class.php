<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Ol extends htmlElement{
		private $reversed = false;
		private $start = null;
		private $type = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'ol';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<' . $this->name;
			$html .= parent::getDependencies();

			$html .= ($this->reversed ? ' reversed' : '');
			$html .= ($this->start != null ? ' start="' . $this->start . '"' : '');
			$html .= ($this->type != null ? ' type="' . $this->type . '"' : '');

			$html .= '>' . PHP_EOL;
			$html .= parent::addChildren();
			$html .= parent::createTabs() . '</' . $this->name . '>' . PHP_EOL;
			return $html;
		}

		public function addEntry(Li $list){
			$list->setParent($this);
			$list->level = $this->getLevel() + 1;
			$list->add();
		}

		public function createListEntry($content){
			$li = new Li($this);
			$li->setContent($content);
			$li->add();
			return $li;
		}

		public function reverse(){
			$this->reversed = true;
		}

		public function setStart($start){
			$this->start = $start;
		}

		public function setType($type){
			$this->type = $type;
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
