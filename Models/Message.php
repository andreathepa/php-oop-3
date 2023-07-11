<?php



class Message  extends System{
        
    private $mess_readed;

    private $mess_accepted;


    function __construct(String $_ringtone, String $_sender, String $_receiver, String $_object, String $_content, String $_mess_readed, String $_mess_accepted){

        parent::__construct($_ringtone, $_sender, $_receiver, $_object, $_content);
        $this->mess_readed = $mess_readed;
        $this->mess_accepted = $mess_accepted;
        
    }





}

    
?>