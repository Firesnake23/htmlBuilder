<?php
    class Style{
        private $property;
        private $value;

        function __construct($property,$value){
            $this->property = $property;
            $this->value = $value;
        }

        function getProperty(){
            return $this->property;
        }

        function getValue(){
            return $this->value;
        }
    }
?>
