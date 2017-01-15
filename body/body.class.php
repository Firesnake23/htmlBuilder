<?php
    require_once $rootFolder.'htmlBuilder/body/htmlElement.class.php';

    //All elements
    require_once $rootFolder.'htmlBuilder/body/a.class.php';
    require_once $rootFolder.'htmlBuilder/body/abbr.class.php';
    require_once $rootFolder.'htmlBuilder/body/address.class.php';
    require_once $rootFolder.'htmlBuilder/body/area.class.php';
    require_once $rootFolder.'htmlBuilder/body/article.class.php';
    require_once $rootFolder.'htmlBuilder/body/aside.class.php';
    require_once $rootFolder.'htmlBuilder/body/audio.class.php';
    require_once $rootFolder.'htmlBuilder/body/b.class.php';
    require_once $rootFolder.'htmlBuilder/body/bdi.class.php';
    require_once $rootFolder.'htmlBuilder/body/bdo.class.php';
    require_once $rootFolder.'htmlBuilder/body/blockquote.class.php';
    require_once $rootFolder.'htmlBuilder/body/br.class.php';
    require_once $rootFolder.'htmlBuilder/body/button.class.php';
    require_once $rootFolder.'htmlBuilder/body/canvas.class.php';
    require_once $rootFolder.'htmlBuilder/body/caption.class.php';
    require_once $rootFolder.'htmlBuilder/body/cite.class.php';
    require_once $rootFolder.'htmlBuilder/body/code.class.php';
    require_once $rootFolder.'htmlBuilder/body/col.class.php';
    require_once $rootFolder.'htmlBuilder/body/colgroup.class.php';
    require_once $rootFolder.'htmlBuilder/body/datalist.class.php';
    require_once $rootFolder.'htmlBuilder/body/dd.class.php';
    require_once $rootFolder.'htmlBuilder/body/del.class.php';
    require_once $rootFolder.'htmlBuilder/body/details.class.php';
    require_once $rootFolder.'htmlBuilder/body/dfn.class.php';
    require_once $rootFolder.'htmlBuilder/body/dialog.class.php';
    require_once $rootFolder.'htmlBuilder/body/div.class.php';
    require_once $rootFolder.'htmlBuilder/body/dl.class.php';
    require_once $rootFolder.'htmlBuilder/body/dt.class.php';
    require_once $rootFolder.'htmlBuilder/body/em.class.php';
    require_once $rootFolder.'htmlBuilder/body/embed.class.php';
    require_once $rootFolder.'htmlBuilder/body/fieldset.class.php';
    require_once $rootFolder.'htmlBuilder/body/figcaption.class.php';
    require_once $rootFolder.'htmlBuilder/body/figure.class.php';
    require_once $rootFolder.'htmlBuilder/body/footer.class.php';
    require_once $rootFolder.'htmlBuilder/body/form.class.php';
    require_once $rootFolder.'htmlBuilder/body/h1.class.php';
    require_once $rootFolder.'htmlBuilder/body/h2.class.php';
    require_once $rootFolder.'htmlBuilder/body/h3.class.php';
    require_once $rootFolder.'htmlBuilder/body/h4.class.php';
    require_once $rootFolder.'htmlBuilder/body/h5.class.php';
    require_once $rootFolder.'htmlBuilder/body/h6.class.php';
    require_once $rootFolder.'htmlBuilder/body/header.class.php';
    require_once $rootFolder.'htmlBuilder/body/hr.class.php';
    require_once $rootFolder.'htmlBuilder/body/i.class.php';
    require_once $rootFolder.'htmlBuilder/body/iframe.class.php';
    require_once $rootFolder.'htmlBuilder/body/img.class.php';
    require_once $rootFolder.'htmlBuilder/body/input.class.php';
    require_once $rootFolder.'htmlBuilder/body/ins.class.php';
    require_once $rootFolder.'htmlBuilder/body/kbd.class.php';
    require_once $rootFolder.'htmlBuilder/body/keygen.class.php';
    require_once $rootFolder.'htmlBuilder/body/main.class.php';
    require_once $rootFolder.'htmlBuilder/body/map.class.php';
    require_once $rootFolder.'htmlBuilder/body/mark.class.php';
    require_once $rootFolder.'htmlBuilder/body/menu.class.php';
    require_once $rootFolder.'htmlBuilder/body/menuitem.class.php';
    require_once $rootFolder.'htmlBuilder/body/meter.class.php';
    require_once $rootFolder.'htmlBuilder/body/nav.class.php';
    require_once $rootFolder.'htmlBuilder/body/noscript.class.php';
    require_once $rootFolder.'htmlBuilder/body/object.class.php';
    require_once $rootFolder.'htmlBuilder/body/ol.class.php';
    require_once $rootFolder.'htmlBuilder/body/optgroup.class.php';
    require_once $rootFolder.'htmlBuilder/body/option.class.php';
    require_once $rootFolder.'htmlBuilder/body/output.class.php';
    require_once $rootFolder.'htmlBuilder/body/p.class.php';
    require_once $rootFolder.'htmlBuilder/body/param.class.php';
    require_once $rootFolder.'htmlBuilder/body/picture.class.php';
    require_once $rootFolder.'htmlBuilder/body/pre.class.php';
    require_once $rootFolder.'htmlBuilder/body/progress.class.php';
    require_once $rootFolder.'htmlBuilder/body/q.class.php';
    require_once $rootFolder.'htmlBuilder/body/rp.class.php';
    require_once $rootFolder.'htmlBuilder/body/rt.class.php';
    require_once $rootFolder.'htmlBuilder/body/ruby.class.php';
    require_once $rootFolder.'htmlBuilder/body/s.class.php';
    require_once $rootFolder.'htmlBuilder/body/samp.class.php';
    require_once $rootFolder.'htmlBuilder/body/section.class.php';
    require_once $rootFolder.'htmlBuilder/body/select.class.php';
    require_once $rootFolder.'htmlBuilder/body/small.class.php';
    require_once $rootFolder.'htmlBuilder/body/source.class.php';
    require_once $rootFolder.'htmlBuilder/body/span.class.php';
    require_once $rootFolder.'htmlBuilder/body/strong.class.php';
    require_once $rootFolder.'htmlBuilder/body/style.class.php';
    require_once $rootFolder.'htmlBuilder/body/sub.class.php';
    require_once $rootFolder.'htmlBuilder/body/summary.class.php';
    require_once $rootFolder.'htmlBuilder/body/sup.class.php';
    require_once $rootFolder.'htmlBuilder/body/table.class.php';
    require_once $rootFolder.'htmlBuilder/body/tbody.class.php';
    require_once $rootFolder.'htmlBuilder/body/td.class.php';
    require_once $rootFolder.'htmlBuilder/body/textarea.class.php';
    require_once $rootFolder.'htmlBuilder/body/tfoot.class.php';
    require_once $rootFolder.'htmlBuilder/body/th.class.php';
    require_once $rootFolder.'htmlBuilder/body/thead.class.php';
    require_once $rootFolder.'htmlBuilder/body/time.class.php';
    require_once $rootFolder.'htmlBuilder/body/tr.class.php';
    require_once $rootFolder.'htmlBuilder/body/track.class.php';
    require_once $rootFolder.'htmlBuilder/body/u.class.php';
    require_once $rootFolder.'htmlBuilder/body/ul.class.php';
    require_once $rootFolder.'htmlBuilder/body/var.class.php';
    require_once $rootFolder.'htmlBuilder/body/video.class.php';
    require_once $rootFolder.'htmlBuilder/body/wbr.class.php';

    class Body extends htmlElement{
        public $page = null;

        public function __construct($page){
            $this->page = $page;
            $this->level = 1;
        }

        public function create(){
            $html = "\t<body" ;

            $html .= parent::getDependencies();

            $html .= '>' . PHP_EOL;
            $html .= parent:: insertContent(false);
            foreach($this->children as $element){
                $html .= $element->create();
            }
            $html .= "\t</body>" . PHP_EOL;
            return $html;
            $this->parent = 'html';
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setName($name){
            $this->elementName = $name;
        }

        public function setClass($class){
            $this->class = $class;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function addStyle(Style $style){
            $len = count($this->styles);
            $this->styles[$len] = $style;
        }

        public function addJsEvent(JavaScriptEvent $jsEvent){
            $len = count($this->jsEvents);
            $this->jsEvents[$len] = $jsEvent;
        }

        public function addElement($name,$level,$parent){
            $element = $this->page->createElement($name,$level,$parent);
            $len = count($this->elements);
            $this->elements[$len] = $element;
            return $element;
        }

        public function addChild(HtmlElement $child){
            $len = count($this->children);
            $this->children[$len] = $child;
        }

        public function addAttribute(CustomAttribute $attribute){
            $len = count($this->CustomAttribute);
            $this->CustomAttribute[$len] = $attribute;
        }

        public function hide(){
            $this->hidden = true;
        }
    }
?>
