<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Table extends htmlElement{
		private $caption = null;
		private $colgroup = null;
		private $head = null;
		private $body = null;
		private $foot = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'table';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<table';
			$html .= parent::getDependencies();
			$html .= '>' . PHP_EOL;

			if($this->caption != null){
				$html .= $this->caption->create();
			}

			if($this->colgroup != null){
				$html .= $this->colgroup->create();
			}

            foreach($this->children as $child){
                $html .= $child->create();

				if(get_class($child) == 'Thead'){
					if($this->foot != null){
						$html .= $this->foot->create();
					}
				}
            }
			$html .= parent::createTabs() . '</table>' . PHP_EOL;
			return $html;
		}

		public function createFoot(){
			if($this->foot == null){
				$this->foot = new Tfoot($this);
			}
			return $this->getFoot();
		}

		public function getFoot(){
			return $this->foot;
		}

		public function createBody(){
			if($this->body == null){
				$this->body = new Tbody($this);
				$this->body->add();
			}
			return $this->getBody();
		}

		public function getBody(){
			return $this->body;
		}

		public function createHead(){
			if($this->head == null){
				$this->head = new Thead($this);
				$this->head->add();
			}
			return $this->getHead();
		}

		public function getHead(){
			return $this->head;
		}

		public function createColgroup($span = null){
			if($this->colgroup == null){
				$colgroup = new Colgroup($this);
				if($span != null){
					$colgroup->setSpan($span);
				}

				$this->colgroup = $colgroup;
			}

			return $this->getColgroup();
		}

		//returns for customizing
		public function getTableHead(){
			return $this->head;
		}

		//returns for customizing
		public function getHeadRow(){
			return $this->headRow;
		}

		//returns for customizing
		public function getColgroup(){
			return $this->colgroup;
		}

		//returns for customizing
		public function getCaption(){
			return $this->caption;
		}

		public function setCaption($caption){
			$this->caption = new Caption($this);
			$this->caption->setContent($caption);
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
