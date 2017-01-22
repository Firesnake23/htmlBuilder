<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Video extends htmlElement{
		private $autoplay = false;
		private $controls = true;
		private $loop = false;
		private $muted = false;
		private $height = null;
		private $poster = null;
		private $preload = null;
		private $src = null;
		private $width = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'video';
    		$this->parent = $parent;
		}

		public function create(){
            $html = '';
            $html .= parent::createTabs() . '<' . $this->name;
            $html .= parent::getDependencies();

			$html .= ($this->autoplay ? ' autoplay' : '');
			$html .= ($this->controls ? ' controls' : '');
			$html .= ($this->loop ? ' loop' : '');
			$html .= ($this->muted ? ' muted' : '');
			$html .= ($this->height != null ? ' height="' . $this->height . '"' : '');
			$html .= ($this->poster != null ? ' poster="' . $this->poster . '"' : '');
			$html .= ($this->preload != null ? ' preload="' . $this->preload . '"' : '');
			$html .= ($this->src != null ? ' src="' . $this->src . '"' : '');
			$html .= ($this->width != null ? ' width="' . $this->width . '"' : '');

            $html .= '>' . PHP_EOL;
            $html .= parent::insertContent(false);
            $html .= parent::addChildren();
            $html .= parent::createTabs() . '</' . $this->name . '>' . PHP_EOL;
            return $html;
        }

		public function autoplay(){
			$this->autoplay = true;
		}

		public function noControls(){
			$this->controls = false;
		}

		public function loop(){
			$this->loop = true;
		}

		public function mute(){
			$this->muted = false;
		}

		public function setHeight($height){
			$this->height = $height;
		}

		public function setPoster($poster){
			$this->poster = $poster;
		}

		public function setPreload($preload){
			$this->preload = $preload;
		}

		public function setSrc($src){
			$this->src = $src;
		}

		public function setWidth($width){
			$this->width = $width;
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
