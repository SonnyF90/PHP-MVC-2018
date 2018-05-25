<?php


class Controller extends CommonController {
    
    protected function _process(){
        
        
        switch($this->_action){
            
            case 'send' :
            
            break;
        
            default:
                
                $this->_view = 'contact/contact.php';
                
            break;
            
        }
    }
}


