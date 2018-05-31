<?php

namespace application\menus;

class ModelMenus {

    
    
    public function main_menu_datas(){
        
        $menus = [
            
                
            ['url' => SITE_URL,              'title'=>'Acceuil'],
            ['url' => SITE_URL . '/contact', 'title'=>'Contact'],
            ['url' => SITE_URL . '/articles/form', 'title'=>'Ajouter'],
            ['url' => SITE_URL . '/articles/ajax', 'title'=>'Ajax']
            
                ];
        
        
        return $menus;
    }
}
