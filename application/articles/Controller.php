<?php

include_once SITE_PATH . '/application/articles/ModelArticles.php';

Class Controller extends CommonController{

    
    protected function _process(){
        
       
        
         $model_article = new ModelArticles();
        
       

        if($this->_action === 'details')

        {
 
            $this->_datas = $model_article ->article($_GET['id']);
            $this->_view = 'articles/article_detail.php';
        }
        
       else  if($this->_action === 'form'){
            $this->_view = 'articles/article_form.php';
        }
        
        else if($this->_action === 'ajax'){
            
            echo json_encode($model_article->articlesJSON());
            
            exit;
            
        }
        
        else{

            $this->_datas = $model_article ->articles();
            
            $this->_view = 'articles/articles.php';

        }   
    }
}


















