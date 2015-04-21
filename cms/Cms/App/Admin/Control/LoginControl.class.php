<?php

//后台管理员登陆与退出模块
class LoginControl extends Control{
    
    private $_db;
    
    public function __init(){
        $this->_db=M('admin');
    }
    
    
    //会员登陆
   public function login(){
       
       if(session('aid'))
           go('Index/index');
       
       if(IS_POST){
           $username=Q('post.username');
           
           //对登陆账号的验证
           if(!$user = $this->_db->where("username='$username'")->find()){
               $this->error('账号不存在');
           }
           
           //对密码的验证
           if($user['password']!=md5($_POST['password'])){
               $this->error('密码错误');
           }

           //当用户名和密码输入正确的时候记录登陆状态
           $_SESSION['aid']=$user['aid'];
           $_SESSION['username']=$user['username'];
           
           //跳转到后台界面
           go('Index/index');
           
       }else{
           $this->display();
       }
        
    }
    
    
    //登录时的验证码显示
   public function code(){
        
        //实例化验证码对象，并显示验证码
        $code = new Code();
        $code->show();
    }
    
    //验证用户输入的验证码的正确性
   public function checkCode(){
        
       $stat = strtoupper($_POST['code'])==$_SESSION['code'] ? 1:0;
       $this->ajax($stat);
        
        
    }
    
    //会员退出
    
    public function out(){
        
        $_SESSION=array();
        session_unset();
        session_destroy();
        $this->success('退出成功','login');
    }
}
?>