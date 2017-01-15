<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Source extends htmlElement{
		private $src = null;
		private $type = null;
		private $srcset = null;

		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'source';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent:: createTabs();
			$html .= '<source';
			$html .= parent::getDependencies();

			if($this->src == null){
				throw new Exception('Source: source must be set');
			}else{
				$html .= ' src="' . $this->src . '"';
			}

			if($this->type == null){
				throw new Exception('Source: type must be set');
			}else{
				$html .= ' type="' . $this->type . '"';
			}

			if($this->srcset != null){
				$html .= ' srcset="' . $this->srcset . '"';
			}

			$html .= '>' . PHP_EOL;
			return $html;
		}

		public function setSrcset($srcset){
			$this->srcset = $srcset;
		}

		public function setType($type){
			$this->type = $type;
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
