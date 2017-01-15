<?php
    class JavaScriptEvent{
        private $event;
        private $action;

        public function __construct($event,$action){
            $this->event = $event;
            $this->action = htmlspecialchars($action);
        }

        public function getEvent(){
            return $this->event;
        }

        public function getAction(){
            return $this->action;
        }
    }
?>
