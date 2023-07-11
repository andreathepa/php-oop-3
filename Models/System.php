<?php

    class System {


        protected $sender;

        protected $receiver;

        protected $object;

        protected $content;


        public function __construct(String $sender, String $receiver, String $object, String $content){
            
            $this->sender = $sender;
            $this->receiver = $receiver;
            $this->object = $object;
            $this->content = $content;

        }


        public function GetSender(){
            return $this->sender; 
        }

        public function GetReceiver(){
            return $this->receiver; 
        }

        public function GetObject(){
            return $this->object; 
        }

        public function GetContent(){
            return $this->content; 
        }


    }


?>