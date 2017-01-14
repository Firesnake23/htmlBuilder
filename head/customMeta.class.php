<?php
    class customMeta extends Meta{
        public function __construct($name,$content){
            parent:: __construct($name,$content);
        }

        public function create($level){
            $html = '';
            for($i = 0; $i < $level;$i++){
                $html .= "\t";
            }

            $html .= '<meta';
            $html .= ' ' . $this->name;
            $html .= '="' . $this->content . '"';
            $html .=  '>';
            $html .= PHP_EOL;
            return $html;
        }
    }
?>
