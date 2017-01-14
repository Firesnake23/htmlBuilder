<?php
    class Link{
        private $rel = null;
        private $href = null;
        private $type = null;

        public function __construct($rel,$href,$type){
            $this->rel = $rel;
            $this->href = $href;
            $this->type = $type;
        }

        public function create($level){
            $html = '';
            for($i = 0; $i < $level;$i++){
                $html .= "\t";
            }

            $html .= '<link rel="' . $this->rel . '"';
            $html .= ' href="' . $this->href . '"';
            $html .= ' type="' . $this->type . '"';
            $html .=  '>';
            $html .= PHP_EOL;
            return $html;
        }
    }
?>
