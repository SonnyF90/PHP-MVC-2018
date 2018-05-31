<?php
namespace includes\components;


class CommonController {
    
    protected $_action;
    protected $_routeur;
    protected $_view;
    protected $_datas = [];
    
    public function __construct( $actionUrl, $routeurUrl) {
        
        $this->_action = $actionUrl;
        
        $this->_routeur = $routeurUrl;
        
        $this->_process();

    }
    
    
    
    
    
    public function get_view(){
        
        return $this->_view;
    }
    
    public function get_datas(){
        
        return $this->_datas;
    }

    
    
    
    
}
