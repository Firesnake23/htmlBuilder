<?php
    class Meta{
        protected $name = null;
        protected $content = null;

        public function __construct($name,$content){
            $this->name = $name;
            $this->content = $content;
        }

        public function create($level){
            $html = '';
            for($i = 0; $i < $level;$i++){
                $html .= "\t";
            }

            $html .= '<meta';
            $html .= ' name="' . $this->name . '"';
            $html .= ' content="' . $this->content . '"';
            $html .=  '>';
            $html .= PHP_EOL;
            return $html;
        }

        public function getMeta(){
            return $this;
        }
    }
?>
