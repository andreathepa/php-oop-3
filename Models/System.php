<?php

    class System {

        public $ringtone;

        private $sender;

        private $receiver;

        private $object;

        private $content;


        function __construct(String $ringtone, String $sender, String $receiver, String $object, String $content){
            
            $this->ringtone = $ringtone = true;
            $this->sender = $sender;
            $this->receiver = $receiver;
            $this->object = $object;
            $this->content = $content;

        }

        public function setRingtone($ringtone){
            return $this->ringtone = $ringtone; 
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


        public function GetMessReaded(){
            return $this->mess_readed; 
        }

        public function GetMessAccepted(){
            return $this->mess_accepted; 
        }

        public function GetNotificaInvio(){
            return $this->notificaInvio; 
        }

        public function GetAllegato(){
            return $this->allegato; 
        }

        public function GetIcon(){
            return $this->icon; 
        }



    }


?>