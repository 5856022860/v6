<?php
//测试控制器类
class IndexControl extends Control{
    function index(){
        $this->display('template/default/index.html');
    }
    
    function test(){
        header("Content-type:text/html;charset=utf-8");
        echo "<div style='Font:36px/38px 微软雅黑;margin:35px;color:#333;'><b>test</b></div>";
    }
    
    
}
?>