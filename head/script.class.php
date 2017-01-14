<?php
    class JavaScript{
        private $src = null;

        public function __construct($src){
            $this->src = $src;
        }

        public function create($level){
            $html = '';
            for($i = 0; $i < $level;$i++){
                $html .= "\t";
            }

            $html .= '<script type="text/javascript"';
            $html .= ' src="' . $this->src . '"';
            $html .=  '></script>';
            $html .= PHP_EOL;
            return $html;
        }
    }
?>
