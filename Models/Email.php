<?php


class Email  extends System{
        
    private $notificaInvio;

    private $allegato;

    private $inoltro;

    private $stampa;


    function __construct(String $_ringtone, String $_sender, String $_receiver, String $_object, String $_content, String $_notificaInvio, String $_allegato, String $inoltro, String $Stampa){

        parent::__construct($_ringtone, $_sender, $_receiver, $_object, $_content);
        $this->notificaInvio = $notificaInvio;
        $this->allegato = $allegato;
        $this->inoltro = $inoltro;
        $this->stampa = $stampa;
        
    }

    public function GetNotificaInvio(){
        return $this->notificaInvio; 
    }

    public function GetAllegato(){
        return $this->allegato; 
    }

    public function GetInoltro(){
        return $this->inoltro; 
    }

    public function GetStampa(){
        return $this->stampa; 
    }

    



}

    
?>