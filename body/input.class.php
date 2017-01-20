<?php
    require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';
    class Input extends htmlElement{
        private $type;
        private $autofocus = false;
        private $checked = false;
        private $contentBefore = false;
        private $disabled = false;
        private $formnovalidate = false; //we write is as formnovalidate="formnovalidate"
        private $multiple = false;
        private $readonly = false;
        private $required = false;
        private $accept = null;
        private $alt = null;
        private $dirname = null;
        private $form = null;
        private $formaction = null;
        private $formtarget = null;
        private $height = null;
        private $list = null;
        private $max = null;
        private $pattern = null;
        private $placeholder = null;
        private $size = null;
        private $step = null;
        private $value = null;
        private $width = null;
        function __construct($parent){
            $this->level = $parent->getLevel() + 1;
            $this->name = 'input';
            $this->parent = $parent;
        }

        public function create(){
            if($this->type == null){
                throw new Exception('Type is not defined');
            }
            $html = '';
            $html .= parent::createTabs();

            if($this->contentBefore){
                $html .= parent::insertContent(true);
            }

            $html .= '<' . $this->name;
            $html .= parent::getDependencies();
            $html .= ' type="' . $this->type . '"';

            $html .= ($this->autofocus != null ? ' autofocus' : '');
            $html .= ($this->checked != null ? ' checked' : '');
            $html .= ($this->disabled != null ? ' disabled' : '');
            $html .= ($this->formnovalidate != null ? ' formnovalidate="formnovalidate"' : '');
            $html .= ($this->multiple != null ? ' multiple' : '');
            $html .= ($this->readonly != null ? ' readonly' : '');
            $html .= ($this->required != null ? ' required' : '');
            $html .= ($this->accept != null ? ' accept="' . $this->accept . '"' : '');
            $html .= ($this->alt != null ? ' alt="' . $this->alt . '"' : '');
            $html .= ($this->dirname != null ? ' dirname="' . $this->dirname . '"' : '');
            $html .= ($this->form != null ? ' form="' . $this->form . '"' : '');
            $html .= ($this->formaction != null ? ' formaction="' . $this->formaction . '"' : '');
            $html .= ($this->formtarget != null ? ' formtarget="' . $this->formtarget . '"' : '');
            $html .= ($this->height != null ? ' height="' . $this->height . '"' : '');
            $html .= ($this->list != null ? ' list="' . $this->list . '"' : '');
            $html .= ($this->max != null ? ' max="' . $this->max . '"' : '');
            $html .= ($this->pattern != null ? ' pattern="' . $this->pattern . '"' : '');
            $html .= ($this->size != null ? ' size="' . $this->size . '"' : '');
            $html .= ($this->step != null ? ' step="' . $this->step . '"' : '');
            $html .= ($this->width != null ? ' width="' . $this->width . '"' : '');


            $html .= ($this->value != null ? $html .= ' value="' . $this->value . '"' : '');
            $html .= ($this->placeholder != null ? $html .= ' placeholder="' . $this->placeholder . '"' : '');
            $html .= '>';
            if(!$this->contentBefore){
                $html .= parent::insertContent(true);
            }
            $html .= PHP_EOL;
            return $html;
        }

        public function autofocus(){
            $this->autofocus = true;
        }

        public function check(){
            $this->checked = true;
        }

        public function contentBefore(){
            $this->contentBefore = true;
        }

        public function disable(){
            $this->disabled = true;
        }

        public function formnovalidate(){
            $this->formnovalidate = true;
        }

        public function multiple(){
            $this->multiple = true;
        }

        public function readonly(){
            $this->readonly = true;
        }

        public function required(){
            $this->required = true;
        }

        public function setAccept($accept){
            $this->accept = $accept;
        }

        public function setAlt($alt){
            $this->alt = $alt;
        }

        public function setDirname($dirname){
            $this->dirname = $dirname;
        }

        public function setForm($form){
            $this->form = $form;
        }

        public function setFormaction($formaction){
            $this->formaction = $formaction;
        }

        public function setFormtarget($formtarget){
            $this->formtarget = $formtarget;
        }

        public function setHeight($height){
            $this->height = $height;
        }

        public function setList($list){
            $this->list = $list;
        }

        public function setMax($max){
            $this->max = $max;
        }

        public function setPattern($pattern){
            $this->pattern = $pattern;
        }

        public function setPlaceholder($placeholder){
            $this->placeholder = htmlspecialchars($placeholder);
        }

        public function setSize($size){
            $this->size = $size;
        }

        public function setStep($step){
            $this->step = $step;
        }

        public function setValue($value){
            $this->value = htmlspecialchars($value);
        }

        public function setWidth($width){
            $this->width = $width;
        }

        public function setType($type){
            $this->type = $type;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setContent($content){
            $this->content = htmlspecialchars($content);
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
