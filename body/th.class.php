<?php
	require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
	class Th extends htmlElement{
		private $abbr = null;
		private $colspan = null;
		private $headers = null;
		private $rowspan = null;
		private $scope = null;
		private $sorted = null;
		public function __construct($parent){
			$this->level = $parent->getLevel() + 1;
    		$this->name = 'th';
    		$this->parent = $parent;
		}

		public function create(){
			$html = parent::createTabs();
			$html .= '<th';

			$html .= parent::getDependencies();

			if($this->abbr != null){
				$html .= ' abbr="' . $this->abbr . '"';
			}

			if($this->colspan != null){
				$html .= ' colspan="' . $this->colspan . '"';
			}

			if($this->headers != null){
				$html .= ' headers="' . $this->headers . '"';
			}

			if($this->rowspan != null){
				$html .= ' rowspan="' . $this->rowspan . '"';
			}

			if($this->scope != null){
				$html .= ' scope="' . $this->scope . '"';
			}

			if($this->sorted != null){
				$html .= ' sorted="' . $this->sorted .'"';
			}

			$html .= '>';
			$html .= parent::insertContent(true);
			$html .= '</th>' . PHP_EOL;
			return $html;
		}

		public function setSorted($sorted){
			$this->sorted = $sorted;
		}

		public function setScope($scope){
			$this->scope = $scope;
		}

		public function setRowspan($rowspan){
			$this->rowspan = $rowspan;
		}

		public function setHeaders($headers){
			$this->headers = $headers;
		}

		public function setColspan($colspan){
			$this->colspan = $colspan;
		}

		public function setAbbr($abbr){
			$this->abbr = $abbr;
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
