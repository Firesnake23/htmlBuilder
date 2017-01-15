<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Audio extends htmlElement{
		private $controls = false;
		private $autoplay = false;
		private $loop = false;
		private $muted = false;
		private $preload = null;

		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'audio';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent:: createTabs();
			$html .= '<audio';
			$html .= parent::getDependencies();

			if($this->controls){
				$html .= ' controls';
			}

			if($this->autoplay){
				$html .= ' autoplay';
			}

			if($this->loop){
				$html .= ' loop';
			}

			if($this->muted){
				$html .= ' muted';
			}

			if($this->preload != null){
				$html .= ' preload="' . $this->preload . '"';
			}

			$html .= '>' . PHP_EOL;
			if(count($this->children) == 0){
				throw new Exception('Audio: must contain at least 1 source');
			}

			$html .= parent::addChildren();

			$html .= parent::createTabs() . '</audio>' . PHP_EOL;
			return $html;
		}

		public function setPreload($preload){
			$this->preload = $preload;
		}

		public function mute(){
			$this->muted = true;
		}

		public function loop(){
			$this->loop = true;
		}

		public function autoplay(){
			$this->autoplay = true;
		}

		public function controls(){
			$this->controls = true;
		}

		public function addSource($src,$type){
			$source = new Source($this);
			$source->setSource($src);
			$source->setType('audio/'.$type);
			$this->addChild($source);
			return $source;
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
