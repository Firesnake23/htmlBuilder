<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Img extends htmlElement{

		private $alt = null;
		private $height = null;
		private $ismap = false;
		private $longdesc = null;
		private $src = null;
		private $usemap = null;
		private $width = null;

		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'img';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<';
			$html .= 'img';
			$html .= parent::getDependencies();

			if($this->src == null){
				throw new Exception('Image requires a source');
			}else{
				$html .= ' src="' . $this->src . '"';
			}

			if($this->alt != null){
				$html .= ' alt="' . $this->alt . '"';
			}

			if($this->height != null){
				$html .= ' height="' . $this->height . '"';
			}

			if($this->width != null){
				$html .= ' width="' . $this->width . '"';
			}

			if($this->ismap){
				$html .= ' ismap';
			}

			if($this->longdesc != null){
				$html .= ' longdesc="' . $this->longdesc . '"';
			}

			if($this->usemap != null){
				$html .= ' usemap="' . $this->usemap . '"';
			}

			$html .= '>' . PHP_EOL;
			return $html;
		}

		public function setWidth($width){
			$this->width = $width;
		}

		public function usemap($usemap){
			$this->usemap = $usemap;
		}

		public function longdesc($longdesc){
			$this->longdesc = $longdesc;
		}

		public function ismap(){
			$this->ismap = true;
		}

		public function setHeight($height){
			$this->height = $height;
		}

		public function alt($alt){
			$this->alt = $alt;
		}

		public function source($source){
			$this->src = $source;
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
