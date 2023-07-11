<?php


class Email  extends System{
        
    private $notifica;

    function __construct(String $_sender, String $_receiver, String $_object, String $_content){

        parent::__construct($_sender, $_receiver, $_object, $_content);
        // // $this->allegato = $allegato;

         
        
    }

    

    
    


    

    // public function stampa()
    // {
    //     echo 'Email ricevuta da ' . $this->sender . ' con oggetto ' . $this->object . ' e con il contenuto <strong>' . $this->content . '</strong>';
    // }


}

    
?>