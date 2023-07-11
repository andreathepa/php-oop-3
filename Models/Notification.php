<?php



class Notification  extends System{
        
    private $icon;


    function __construct(String $_ringtone, String $_sender, String $_receiver, String $_object, String $_content, String $_icon){

        parent::__construct($_ringtone, $_sender, $_receiver, $_object, $_content);
        $this->icon = $icon;
        
    }





}

    
?>
    


    
