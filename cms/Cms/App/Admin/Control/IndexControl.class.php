<?php

//后台管理
class IndexControl extends AuthControl{
    
    
    public function index(){
       $this->display(); 

    }
    
    //欢迎界面
    public function welcome(){
        echo "欢迎使用V5 CMS";
    
    }
    
}
?>